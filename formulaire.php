<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nicolas-chonavey.fr</title>
    <link rel="stylesheet" href="styles/formulaire.css">
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image" href="images/Logo_simplifie.svg" />
</head>


<div class="contact-form">
    <div class="contact-form-content">
        <form action="formulaire_valid.php" method="post" class="form" enctype="multipart/form-data">
            <h3>Formulaire de contact</h3>
            <i>
                <p class="asterix">
                    <font color="FF0000">* </font>Les champs marqués d'une astérix doivent être remplis.
                </p>
            </i>
            <div class="name-group">
                <div class="form-informations">
                    <label for="prenom">Prénom<font color="FF0000">*</font></label>
                    <br>
                    <input type="text" required="required" required pattern="^[A-Za-z '\-]+$" maxlength="32" name="prenom" id="prenom" class="form-first-name" placeholder="John">
                    <br>
                </div>

                <div class="form-informations">
                    <label for="nom">Nom<font color="FF0000">*</font></label>
                    <br>
                    <input type="text" required="required" required pattern="^[A-Za-z '\-]+$" maxlength="32" name="nom" id="nom" class="form-name" placeholder="Doe">
                    <br>
                </div>
            </div>

            <div class="form-informations">
                <label for="mail">Adresse e-mail<font color="FF0000">*</font></label>
                <br>
                <input type="text" required="required" required pattern="^[A-Za-z]+@{1}[A-Za-z]+\.{1}[A-Za-z]{2,}$" name="mail" id="mail" class="form-mail" placeholder="johndoe@exemple.com">
                <br>
            </div>

            <div class="form-informations">
                <label for="objet">Objet</label>
                <br>
                <input type="text" name="objet" id="objet" maxlength="30" class="form-objet" placeholder="Proposition d'entretien">
                <br>
            </div>
            <div class="form-informations">
                <label for="message">Message<font color="FF0000">*</font></label>
                <br>
                <textarea class="message" name="message" id="message" required="required" maxlength="500" rows="2" cols="25" placeholder="Bonjour, je souhaite vous contacter pour..."></textarea>
            </div>
            <button type="submit" class="btn btn-submit" name="submitInfo" value="Envoyer">Envoyer</button>
            <!-- <div class="form-documents">
                <p>Pièces jointes</p>
                <div class="documents-content">
                    <label for="file1">
                        <div class="drag-area">
                            <i class="bi bi-upload"></i>
                            <div class="file-preview" id="file-preview1">
                            </div>
                            <input type="file" name="file1" id="file1">
                            <button type="button" class="btn-delete" id="delete1" style="display: none"><i class="bi bi-x-circle-fill"></i></button>
                        </div>
                    </label>


                    <label for="file2">
                        <div class="drag-area">
                            <i class="bi bi-upload"></i>
                            <div class="file-preview" id="file-preview2"></div>
                            <input type="file" name="file2" id="file2">
                            <button type="button" class="btn-delete" id="delete1" style="display: none"><i class="bi bi-x-circle-fill"></i></button>

                        </div>
                    </label>

                    <label for="file3">
                        <div class="drag-area">
                            <i class="bi bi-upload"></i>
                            <div class="file-preview" id="file-preview3"></div>
                            <input type="file" name="file3" id="file3">
                            <button type="button" class="btn-delete" id="delete1" style="display: none"><i class="bi bi-x-circle-fill"></i></button>
                        </div>
                    </label>


                    <label for="file4">
                        <div class="drag-area">
                            <i class="bi bi-upload"></i>
                            <div class="file-preview" id="file-preview4"></div>
                            <input type="file" name="file4" id="file4">
                            <button type="button" class="btn-delete" id="delete1" style="display: none"><i class="bi bi-x-circle-fill"></i></button>
                        </div>
                    </label>

                </div>

            </div> -->


        </form>
    </div>
</div>