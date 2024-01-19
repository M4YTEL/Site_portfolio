<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>borne_BrewBike</title>
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
    <link rel="stylesheet" href="styles/borne_BrewBike.css">
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image" href="images/Logo_simplifie.svg" />
</head>

<body>
    <section class="container">
        <?php include("header.php"); ?>
        <main>
            <?php include("cursor.php"); ?>
            <section class="banner_BrewBike">
                <div class="banner-title_BrewBike">
                    <h2>Borne BrewBike</h2>
                    <h3>La borne intéractive pour connaître votre métier !</h3>
                    <div class="badge">
                        <!-- <a href="pdf\Loxo_maquette.pdf" target="_blank"><button class="btn btn-primary">Télécharger maquette<i class="bi bi-download"></i></button></a> -->
                    </div>
                    <!-- <p> Ce site responsive est developpé en HTML 5, CSS3 et javascript.</p> -->
                </div>
            </section>

            <section class="container">
                <div class="presentation-header">
                    <h4>#DESIGN SPRINT · #MAQUETTE</h4>
                    <h2>Le projet BrewBike</h2>
                </div>
                <div class="presentation">
                    <!-- <img src="images/Presentation.png" alt="" loading="lazy" class="presentation-image"> -->

                    <!-- Slideshow container -->
                    <div class="slideshow-container">

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                            <div class="numbertext">1 / 4</div>
                            <img src="images/BrewBike/BrewBike_borne.jpg" style="width:100%">
                            <!-- <div class="text">Caption One</div> -->
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">2 / 4</div>
                            <img src="images/BrewBike/BrewBike_borne2.jpg" style="width:100%">
                            <!-- <div class="text">Caption Two</div> -->
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">3 / 4</div>
                            <img src="images/BrewBike/BrewBike_borne3.jpg" style="width:100%">
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">4 / 4</div>
                            <img src="images/BrewBike/BrewBike_borne4.jpg" style="width:100%">
                        </div>
                        <!-- Next and previous buttons -->
                        <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
                    </div>

                    <div class="presentation-description" id="a-propos">
                        <p> BrewBike est une marque qui vend du café fait par les étudiants pour les étudiants. Elle cherche a s'implanter dans les campus en France. La problématique que notre agence fictive s'est posée est la suivante :
                            "Comment concevoir une expérience d'apprentissage immersive et accessible pour familiariser les étudiants avec le concept innovant de BrewBike ?".
                            C'est de cette situation et de la problématique que nous sommes parti pour proposer nos deux solutions lors de notre design sprint.
                            La première est un quiz de personnalité pour déterminer selon les compétences, goûts et habitudes quel métier BrewBike est fait pour toi. La seconde une formation évènementielle spéciale "Barista" sous forme de jeux pour créer sa recette de café et venir la goûter en boutique.
                            Toute notre reflexion s'est orientée sur la proposition d'une solution ludique, intéractive au plus proche des étudiants pour leurs permettre de comprendre et d'adhérer au concept et les orientés vers des formations adaptés. Notre travail se base sur les attentes et freins de nos personna.
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
                                <img src="icons/Figma_logo.svg" class="outils-icon" alt="figma logotype" />
                                <img src="icons/Jira_logo.svg" class="outils-icon" alt="jira logotype" />
                                <img src="icons/Adobe_Photoshop_CC_icon.svg" class="outils-icon" alt="illustrator logotype" />

                            </div>
                        </div>
                    </div>
                    <div class="outils-content">
                        <h3>Durée</h3>
                        <p>
                            1 semaine (design sprint)
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