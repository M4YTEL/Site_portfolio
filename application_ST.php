<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>application_ST</title>
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
    <link rel="stylesheet" href="styles/application_ST.css">
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image" href="images/Logo_simplifie.svg" />
</head>

<body>
    <section class="container">
        <?php include("header.php"); ?>
        <main>
            <?php include("cursor.php"); ?>
            <section class="banner_ST">
                <div class="banner-title_ST">
                    <h2>SpeedTrott</h2>
                    <h3>L'application pour se déplacer librement
                    </h3>
                    <div class="badge">
                        <a href="pdf/ST_maquette.pdf" target="_blank"><button class="btn btn-primary" target="_blank">Télécharger maquette</button></a>
                    </div>
                    <!-- <p> Ce site responsive est developpé en HTML 5, CSS3 et javascript.</p> -->
                </div>
            </section>

            <section class="container">
                <div class="presentation-header">
                    <h4>#MAQUETTE</h4>
                    <h2>Le projet SpeedTrott</h2>
                </div>
                <div class="presentation">
                    <!-- <img src="images/Presentation.png" alt="" loading="lazy" class="presentation-image"> -->

                    <!-- Slideshow container -->
                    <div class="slideshow-container">

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                            <div class="numbertext">1 / 4</div>
                            <img src="images/ST/ST_application_mobile.jpg" style="width:100%">
                            <!-- <div class="text">Caption One</div> -->
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">2 / 4</div>
                            <img src="images/ST/ST_application_mobile2.jpg" style="width:100%">
                            <!-- <div class="text">Caption Two</div> -->
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">3 / 4</div>
                            <img src="images/ST/ST_application_mobile3.jpg" style="width:100%">
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">4 / 4</div>
                            <img src="images/ST/ST_application_mobile4.jpg" style="width:100%">
                        </div>

                        <!-- Next and previous buttons -->
                        <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
                    </div>

                    <div class="presentation-description" id="a-propos">
                        <p> L'application mobile SpeedTrott incarne le fruit d'un travail pousé autout d'une interface utilisateur aux styles moderne et urbain. Conçue pour répondre aux besoins de mobilité verte, cette application offre une expérience utilisateur intuitive. Elle a été créée en mettant l'accent sur la simplicité et la convivialité, garantissant ainsi que tous les utilisateurs, des novices aux riders chevronnés, puissent l'utiliser facilement.
                            L'application propose des fonctionnalités pour optimiser vos déplacements en trottinette électrique. Elle vous permet de planifier des itinéraires, de suivre votre consommation d'énergie, et d'accéder à des informations en temps réel sur les disponibilités des bornes de recharge les plus proches.
                        <div class="badge">
                            <a href="index.php#contact"><button class="btn btn-primary">Me contacter<button></button></a>
                        </div>
                    </div>
                </div>

                <div class="outils">
                    <div class="tabs">
                        <div class="tab-registers">
                            <button class="active-tab">
                                <h3>Outils utilisés</h3>
                            </button>
                        </div>
                        <div class="tab-bodies">
                            <div style="display:block;">
                                <img src="icons/Figma_logo.svg" class="outils-icon" alt="figma" />
                                <img src="icons/Adobe_Illustrator_CC_icon.svg" class="outils-icon" alt="illustrator" />
                            </div>
                        </div>
                    </div>
                    <div class="outils-content">
                        <h3>Durée</h3>
                        <p>
                            1 semaine
                        </p>
                    </div>
                </div>
            </section>
            <?php include("reseaux_sociaux.php"); ?>
            <?php include("footer.php") ?>
        </main>
    </section>
    <script src="js/menu.js">
    </script>
    <script src="js/carousel.js">
    </script>
    <script src="js/onglet.js">
    </script>
    <script src="js/deplier.js">
    </script>
    <script src="js/cursor.js">
    </script>

</body>

</html>