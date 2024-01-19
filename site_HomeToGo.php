<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site_HomeToGo</title>
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
    <link rel="stylesheet" href="styles/site_HomeToGo.css">
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image" href="images/Logo_simplifie.svg" />
</head>

<body>
    <section class="container">
        <?php include("header.php"); ?>
        <main>
            <?php include("cursor.php"); ?>
            <section class="banner_HomeToGo">
                <div class="banner-title_HomeToGo">
                    <h2>HomeToGo</h2>
                    <h3>HomeToGo voyager de manière ludique !</h3>
                    <!-- <div class="badges"> -->
                    <!-- <div class="badge">
                    <a href="pdf/Ggraph_maquette.pdf" target="_blank"><button class="btn btn-primary" target="_blank">Télécharger
                            la maquette<i class="bi bi-download"></i></button></a>
                </div> -->
                    <div class="badge">
                        <a href="pdf/Home_To_Go_maquette.pdf" target="_blank"><button class="btn btn-primary" target="_blank">Télécharger maquette</button></a>
                    </div>
                    <!-- </div> -->
                </div>
            </section>

            <section class="container">
                <div class="presentation-header">
                    <h4>#MAQUETTE</h4>
                    <h2>Le projet HomeToGo</h2>
                </div>
                <div class="presentation">
                    <!-- Slideshow container -->
                    <div class="slideshow-container">

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                            <div class="numbertext">1 / 12</div>
                            <img src="images/HomeToGo/Home_page.png" style="width:100%">
                            <!-- <div class="text">Caption One</div> -->
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">2 / 12</div>
                            <img src="images/HomeToGo/Home_page2.png" style="width:100%">
                            <!-- <div class="text">Caption Two</div> -->
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">3 / 12</div>
                            <img src="images/HomeToGo/Accompagenement1.png" style=" width:100%">
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">4 / 12</div>
                            <img src="images/HomeToGo/Accompagenement2.png" style="width:100%">
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">5 / 12</div>
                            <img src="images/HomeToGo/Chargement.png" style="width:100%">
                        </div>
                        <div class="mySlides fade">
                            <div class="numbertext">6 / 12</div>
                            <img src="images/HomeToGo/Liste_des_offres.png" style="width:100%">
                        </div>
                        <div class="mySlides fade">
                            <div class="numbertext">7 / 12</div>
                            <img src="images/HomeToGo/Détails_de_l'offre.png" style="width:100%">
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">8 / 12</div>
                            <img src="images/HomeToGo/Inspiration.png" style="width:100%">
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">9 / 12</div>
                            <img src="images/HomeToGo/Inspiration_détail.png" style="width:100%">
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">10 / 12</div>
                            <img src="images/HomeToGo/Inspiration_détail2.png" style="width:100%">
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">11 / 12</div>
                            <img src="images/HomeToGo/Inspiration_détail3.png" style="width:100%">
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">12 / 12</div>
                            <img src="images/HomeToGo/Inspiration_détail4.png" style="width:100%">
                        </div>

                        <!-- <div class="mySlides fade">
                        <div class="numbertext">5 / 5</div>
                        <img src="images/Ggraph/Footer_Desktop.jpg" style="width:100%">
                    </div> -->
                    </div>

                    <div class="presentation-description" id="a-propos">
                        <p>En collaboration avec notre équipe de quatre designers, nous avons repensé l'expérience utilisateur de HomeToGo. Le nouveau parcours utilisateur met en avant une navigation intuitive, des recommandations personnalisées, et une page d'accueil immersive. Le design épuré, la gamification et la personnalisation des offres visent à améliorer la fidélisation des utilisateurs pour une expérience plus engageante.</p>
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
                                <img src="icons/miro_logo.svg" class="outils-icon" alt="miro" />
                                <img src="icons/trello_logo.svg" class="outils-icon" alt="trello" />
                            </div>
                        </div>
                    </div>
                    <div class="outils-content">
                        <h3>Durée</h3>
                        <p>1 semaine</p>
                    </div>
                </div>
            </section>
            <?php include("reseaux_sociaux.php"); ?>
            <?php include("footer.php"); ?>
        </main>
    </section>
    <script src=" js/menu.js">
    </script>
    <script src=" js/onglet.js">
    </script>
    <script src=" js/carousel.js">
    </script>
    <script src="js/deplier.js">
    </script>
    <script src="js/cursor.js">
    </script>

</body>

</html>