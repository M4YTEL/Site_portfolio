<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>site_ovni_boost</title>
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
    <link rel="stylesheet" href="styles/site_ovni_boost.css">
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image" href="images/Logo_simplifie.svg" />
</head>

<body>
    <section class="container">
        <?php include("header.php"); ?>
        <main>
            <?php include("cursor.php"); ?>
            <section class="banner_Ovni_boost">
                <div class="banner-title_Ovni_boost">
                    <h2>Ovni boost</h2>
                    <h3>Le site pour booster votre créativité !</h3>
                    <!-- <div class="badge">
                    <a href="pdf/Izzy_maquette_in_progress.pdf"><button class="btn btn-primary"
                            target="_blank">Télécharger
                            la maquette<i class="bi bi-view-stacked"></i></button></a>
                </div> -->
                </div>
            </section>

            <section class="container">
                <div class="presentation-header">
                    <h4>#MAQUETTE</h4>
                    <h2>Le projet Ovni boost</h2>
                </div>
                <div class="presentation">
                    <!-- <img src="images/Presentation.png" alt="" loading="lazy" class="presentation-image"> -->

                    <!-- video container -->
                    <div class="video-container">
                        <video controls muted autoplay loop preload="auto" width="430" height="260" controls>
                            <source src="vidéos/Ovni_boost_site_e-commerce.mp4" type=video/mp4>
                        </video>
                    </div>

                    <div class="presentation-description" id="a-propos">
                        <p> Pour la première fois, ce projet à était pour moi l'occasion de développer un design 100% desktop et une
                            interface via adobe XD pour un site vitrine. Mettre en avant, ce à quoi pourrait ressembler
                            l'interface une fois developpé et animé, cela permet au client de mieux ce projeter sur
                            son futur site.</p>
                        <div class="badge">
                            <a href="index.php#contact"><button class="btn btn-primary">Me contacter</i><button></button></a>
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
                                <img src="icons/Adobe_XD_CC_icon.svg" class="outils-icon" alt="figma" />
                                <img src="icons/Adobe_Illustrator_CC_icon.svg" class="outils-icon" alt="illustrator" />
                                <img src="icons/Jira_logo.svg" class="outils-icon" alt="Jira" />
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
    <script src=" js/menu.js">
    </script>
    <script src=" js/en_savoir_plus.js">
    </script>
    <script src=" js/onglet.js">
    </script>
    <script src="js/deplier.js">
    </script>
    <script src="js/cursor.js">
    </script>
</body>

</html>