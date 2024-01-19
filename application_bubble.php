<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>application_bubble</title>
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
    <link rel="stylesheet" href="styles/application_bubble.css">
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image" href="images/Logo_simplifie.svg" />
</head>

<body>
    <section class="container">
        <?php include("header.php"); ?>
        <main>
            <?php include("cursor.php"); ?>
            <section class="banner_Loxo">
                <div class="banner-title_Loxo">
                    <h2>Bubble ViewStat</h2>
                    <h3>L'application pour suivres vos films et séries !</h3>
                    <div class="badge">
                        <!-- <a href="pdf\Loxo_maquette.pdf" target="_blank"><button class="btn btn-primary">Télécharger maquette<i class="bi bi-download"></i></button></a> -->
                    </div>
                    <!-- <p> Ce site responsive est developpé en HTML 5, CSS3 et javascript.</p> -->
                </div>
            </section>

            <section class="container">
                <div class="presentation-header">
                    <h4>#CHARTE, #MAQUETTE</h4>
                    <h2>Le projet Bubble ViewStat</h2>
                </div>
                <div class="presentation">
                    <!-- <img src="images/Presentation.png" alt="" loading="lazy" class="presentation-image"> -->

                    <!-- Slideshow container -->
                    <div class="slideshow-container">

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                            <div class="numbertext">1 / 5</div>
                            <img src="images/Bubble/Bubble_application.jpg" style="width:100%">
                            <!-- <div class="text">Caption One</div> -->
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">2 / 5</div>
                            <img src="images/Bubble/Bubble_application2.jpg" style="width:100%">
                            <!-- <div class="text">Caption Two</div> -->
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">3 / 5</div>
                            <img src="images/Bubble/Bubble_application3.jpg" style="width:100%">
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">4 / 5</div>
                            <img src="images/Bubble/Bubble_application4.jpg" style="width:100%">
                        </div>

                        <!-- <div class="mySlides fade">
                        <div class="numbertext">5 / 6</div>
                        <img src="images/Loxo/Loxo5.png" style="width:100%">
                    </div> -->

                        <div class="mySlides fade">
                            <div class="numbertext">5 / 5</div>
                            <img src="images/Bubble/Bubble_application5.jpg" style="width:100%">
                        </div>
                        <!-- Next and previous buttons -->
                        <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
                    </div>

                    <div class="presentation-description" id="a-propos">
                        <p> Explorez Bubble, l'application de gestion de contenu vidéo. Je l'ai conçu de A à Z en mettant en place une interface fluide pour créer sa watchlist, suivre sa progression dans le visonnage de ses séries et découvrir de bénéficier de sugestions personnalisées. Le principe de l'application repose sur un tracker d'ou l'importance de penser à la transparentes des données. L'objectif étais pour moi d'intégrer dans l'application les nombreuses lois et principes UX vu en cours pour les appliquer et obtenir une application qui est réelement facile à prendre en main.
                        </p>
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
                                <img src="icons/Adobe_Illustrator_CC_icon.svg" class="outils-icon" alt="illustrator" />
                                <img src="icons/Figma_logo.svg" class="outils-icon" alt="figma" />
                                <img src="icons/Protopie_logo.svg" class="outils-icon" alt="protopie" />
                            </div>
                        </div>
                    </div>
                    <div class="outils-content">
                        <h3>Durée</h3>
                        <p>
                            2 semaines
                        </p>
                    </div>
                </div>
            </section>
            <?php include("reseaux_sociaux.php"); ?>
            <?php include("footer.php"); ?>
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