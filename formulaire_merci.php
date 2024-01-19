<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire_merci</title>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "name": "nicolas-chonavey.fr",
            "url": "https://nicolas-chonavey.fr/",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "{search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
    </script>
    <link rel="stylesheet" href="styles/formulaire_merci.css">
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image" href="images/Logo_simplifie.svg" />
</head>

<body>
    <?php include("header.php"); ?>
    <main>
        <?php include("cursor.php"); ?>
        <section class="banner_merci">
            <div class="banner-title_merci">
                <h2>Votre message a bien été envoyé !</h2>
                <p>Merci d'avoir pris le temps de le remplir pour me contacter.</p>

                <div class="badge">
                    <a href="index.php"><button class="btn btn-primary" target="_blank">Accueil</button></a>
                </div>
            </div>
        </section>

    </main>
    <?php include("footer.php") ?>
    <script src="js/menu.js">
    </script>
    <script src="js/cursor.js">
    </script>
</body>