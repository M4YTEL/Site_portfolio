<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>application_spatiale</title>
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
    <link rel="stylesheet" href="styles/application_spatiale.css">
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image" href="images/Logo_simplifie.svg" />
</head>

<body>
    <section class="container">
        <?php include("header.php"); ?>
        <main>
            <?php include("cursor.php"); ?>
            <section class="banner_Oxo">
                <div class="banner-title_Oxo">
                    <h2>Oxo</h2>
                    <h3>L'application qui fait découvrir l'espace !</h3>
                    <div class="badge">
                        <a href="pdf\Oxo_maquette.pdf" target="_blank"><button class="btn btn-primary">Télécharger maquette</button></a>
                    </div>
                </div>
            </section>

            <section class="container">
                <div class="presentation-header">
                    <h4>#MAQUETTE</h4>
                    <h2>Le projet Oxo</h2>
                </div>
                <div class="presentation">
                    <!-- <img src="images/Presentation.png" alt="" loading="lazy" class="presentation-image"> -->

                    <!-- vidéo container -->
                    <div class="video-container">
                        <video controls muted autoplay loop preload="auto" width="430" height="260" controls>
                            <source src="vidéos/Oxo_application_mobile_video_1.mp4" type=video/mp4>
                        </video>
                    </div>

                    <div class="presentation-description" id="a-propos">
                        <p> L'idée de ce projet était de développer une application mobile originale. Le design de
                            l'application se devait de concorder avec son thème. Mon concept original était
                            de repartir du principe des livres audio, mais adapté à une découverte interactives des galaxies
                            et des planètes. L'application offre la possibilité au néophyte de l'astronomie dans apprendre
                            davantage sur les objets de l'espace via des balades audio interactives accompagné par un
                            narrateur. Le wireframe et le maquettage ont été réalisés sur Figma.</p>
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
                            2 semaines
                        </p>
                    </div>
                </div>
            </section>
            <?php include("reseaux_sociaux.php"); ?>
            <?php include("footer.php") ?>
        </main>
    </section>
    <script src=" js/menu.js">
    </script>
    <script src=" js/onglet.js">
    </script>
    <script src="js/deplier.js">
    </script>
    <script src="js/cursor.js">
    </script>

</body>

</html>