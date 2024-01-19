<?php
$serveur = "nicolakmaster.mysql.db";
$dbname = "nicolakmaster";
$user = "nicolakmaster";
$pass = "sN45OOopp4";

// Fonction pour valider les données (elle est déjà dans votre code)
function valid_donnees($donnees)
{
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
}
// Chemin du répertoire de stockage des fichiers téléchargés
$target_dir = "images/uploads/";

// Initialisez un tableau pour stocker les chemins des fichiers téléchargés
$uploadedFiles = [];

// Traitez chaque champ de fichier
for ($i = 1; $i <= 4; $i++) { // 4 est le nombre de champs de fichier dans le formulaire
    $fileInputName = "file" . $i;

    // Vérifiez si un fichier a été téléchargé pour ce champ
    if (!empty($_FILES[$fileInputName]["name"])) {
        $target_file = $target_dir . basename($_FILES[$fileInputName]["name"]);
        $uploadOk = 1;

        // Obtenez l'extension du fichier
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Vérifiez si le fichier est une image (jpg, jpeg, png) ou un PDF
        if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "pdf") {
            echo "Seuls les fichiers JPG, JPEG, PNG et PDF sont autorisés.";
            $uploadOk = 0;
        }

        if ($uploadOk) {
            // Déplacez le fichier téléchargé vers le répertoire de stockage
            if (move_uploaded_file($_FILES[$fileInputName]["tmp_name"], $target_file)) {
                echo "Le fichier " . basename($_FILES[$fileInputName]["name"]) . " a été téléchargé avec succès.";
                // Stockez le chemin du fichier téléchargé
                $uploadedFiles[] = $target_file;
            } else {
                echo "Une erreur s'est produite lors du téléchargement du fichier.";
                // Gérer cette erreur comme vous le souhaitez
            }
        }
    }
}

// Les données des autres champs du formulaire
$prenom = valid_donnees($_POST["prenom"]);
$nom = valid_donnees($_POST["nom"]);
$mail = valid_donnees($_POST["mail"]);
$objet = valid_donnees($_POST["objet"]);
$message = valid_donnees($_POST["message"]);


if (
    !empty($nom)
    && strlen($nom) <= 32
    // && preg_match("/^[A-Za-z '-]+$/", $nom)
    // && !empty($prenom)
    // && strlen($prenom) <= 32
    // && preg_match("/^[A-Za-z '-]+$/", $prenom)
    && !empty($mail)
    && filter_var($mail, FILTER_VALIDATE_EMAIL)
) {

    try {
        // On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname", $user, $pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // On insère les données reçues (y compris les chemins des fichiers téléchargés)
        $sth = $dbco->prepare("
        INSERT INTO form(prenom, nom, mail, objet, message, fichier1, fichier2, fichier3, fichier4)
        VALUES(:prenom, :nom, :mail, :objet, :message, :fichier1, :fichier2, :fichier3, :fichier4)");

        $sth->bindParam(':prenom', $prenom);
        $sth->bindParam(':nom', $nom);
        $sth->bindParam(':mail', $mail);
        $sth->bindParam(':objet', $objet);
        $sth->bindParam(':message', $message);

        // Associez les chemins des fichiers téléchargés aux colonnes de la base de données
        // Associez les chemins des fichiers téléchargés aux colonnes de la base de données
        for ($i = 0; $i < 4; $i++) {
            if (isset($uploadedFiles[$i])) {
                $sth->bindParam(":fichier" . ($i + 1), $uploadedFiles[$i]);
            } else {
                // Si aucun fichier n'est téléchargé, spécifiez une valeur par défaut (par exemple, une chaîne vide)
                $sth->bindParam(":fichier" . ($i + 1), "");
            }
        }

        $sth->execute();

        // On renvoie l'utilisateur vers la page de remerciement
        header("Location: formulaire_merci.php");
    } catch (PDOException $e) {
        echo 'Erreur : ' . $e->getMessage();
    }
} else {
    $erreur_message = "Le formulaire n'a pas pu être soumis en raison de données invalides.";
    header("Location: index.php#contact?erreur=" . urlencode($erreur_message));
    exit;
}
