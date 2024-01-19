<?php
$serveur = "nicolakmaster.mysql.db";
$dbname = "nicolakmaster";
$user = "nicolakmaster";
$pass = "sN45OOopp4";


$prenom = valid_donnees($_POST["prenom"]);
$nom = valid_donnees($_POST["nom"]);
$mail = valid_donnees($_POST["mail"]);
$objet = valid_donnees($_POST["objet"]);
$message = valid_donnees($_POST["message"]);

function valid_donnees($donnees)
{
    $donnees = trim($donnees);
    $donnees = stripslashes($donnees);
    $donnees = htmlspecialchars($donnees);
    return $donnees;
}


/*Si les champs prenom et mail ne sont pas vides et si les donnees ont
     *bien la forme attendue...*/
if (
    !empty($nom)
    && strlen($nom) <= 32
    // && !empty($prenom)
    // && strlen($prenom) <= 32
    // ne fonctionne pas et fait échoué l'envoi du formulaire sans erreurs && preg_match("^[A-Za-z '\-]+$", $nom)
    && !empty($mail)
    && filter_var($mail, FILTER_VALIDATE_EMAIL)
) {

    try {
        //On se connecte à la BDD
        $dbco = new PDO("mysql:host=$serveur;dbname=$dbname", $user, $pass);
        $dbco->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //On insère les données reçues
        $sth = $dbco->prepare("
        INSERT INTO form(prenom, nom, mail, objet, message)
        VALUES(:prenom, :nom, :mail, :objet, :message)");
        $sth->bindParam(':prenom', $prenom);
        $sth->bindParam(':nom', $nom);
        $sth->bindParam(':mail', $mail);
        $sth->bindParam(':objet', $objet);
        $sth->bindParam(':message', $message);

        $sth->execute();
        //On renvoie l'utilisateur vers la page de remerciement
        header("Location:formulaire_merci.php");
    } catch (PDOException $e) {
        echo 'Erreur : ' . $e->getMessage();
    }
} else {
    header("Location:index.php#contact");
}
