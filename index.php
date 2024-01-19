<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez mes prestations web. Depuis le parcours utilisateur en passant par le design d'interface, le développement du site et jusqu'au référencement naturel ; je donne vie à vos projets !">
    <title>nicolas-chonavey.fr</title>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel=" stylesheet" href="styles/index.css">
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image" href="images/Logo_simplifie.svg" />
</head>

<body>
    <section class="container">
        <?php include("header.php"); ?>
        <main>
            <?php include("cursor.php"); ?>
            <section class="banner-container">
                <section class="banner">
                    <div class="banner-content">
                        <div class=" banner-content-text">
                            <!-- <div class="banner-illustration"> -->
                            <div class="banner-title">
                                <h1>Développer un design </br>
                                    intuitif, accessible, engageant</h1>
                                <a href="#projets"><button class="btn btn-primary">Découvrir</button></a>
                            </div>
                            <!-- <div class="banner-slider">
                            <div class="slider">
                                <div class="slider-text-1">
                                    <h1>intuitif</h1>
                                </div>
                                <div class="slider-text-2">
                                    <h1>accessible</h1>
                                </div>
                                <div class="slider-text-3">
                                    <h1>engageant</h1>
                                </div>
                            </div>
                        </div> -->
                        </div>
                        <div class="banner-illustration">
                            <img src="images\banner-img.png" alt="chemin optimisé" loading="lazy">
                        </div>
                        <!-- <div class="banner-illustration">
                        <img src="images/banner-illustration.png" alt="image en bannière" loading="lazy" class="banner-image">
                    </div> -->

                    </div>
                    <!-- SCROOL DOWN -->
                    <!-- <a id="scroll-btn" href="#section-a-propos"></a> -->
                </section>
            </section>

            <!-- <section class=container id="section-a-propos"> -->
            <section id="section-a-propos">
                <div class="presentation-container">
                    <div class="presentation-header" id="a-propos">
                        <!-- <h4>#PRÉSENTATION</h4> -->
                        <h2>À Propos</h2>
                        <div class="highlight"></div>
                    </div>

                    <div class="presentation-content">
                        <div class="presentation-description">

                            <h3>Nicolas Chonavey UX/UI designer & développeur en recherche d'alternance sur Lyon.</h3>

                            <p>Dans le cadre de mon <strong> mastère Manager de projets digitaux en UX design </strong> à l'ESD (l'Ecole Supérieur du Digital), je cherche une alternance
                                pour 2023 en tant qu'UI/UX designer ou web designer sur Lyon. Je suis ouvert au
                                télétravail en cas de besoin. Jeune, dynamique et particulièrement curieux,
                                j’adore apprendre et me tenir au courant des nouvelles tendances. Ce qui me passionne et me
                                motive, c’est de donner vie à une idée, un concept, une expérience. Je m’assure de créer des interfaces utilisateur élégantes,
                                tout en mettant un point d'honneur à délivrer l'expérience utilisateur la plus intuitive
                                </strong> et efficace possible.
                            </p>
                            <div class="presentation-description-buttons">
                                <!-- <a href="#competences"><button class="btn btn-secondary">Mon expertise<i class="bi bi-gear-fill"></i><button></button></a> -->
                                <a href="#contact"><button class="btn btn-primary">Me contacter</button></a>
                            </div>
                        </div>
                        <!-- Icones pour les boutons -->
                        <!-- <i class="bi bi-arrow-right"></i></i>-->
                        <!-- <div class="presentation-illustration">
                    <img src="images/3D_presentation.png" alt="image en bannière" loading="lazy" class="banner-image">
                </div> -->
                    </div>
                </div>
            </section>

            <section class="container" id="sec-2">
                <div class="projets-header" id="projets">
                    <!-- <h4>#PORTFOLIO</h4> -->
                    <h2>Mes projets</h2>
                    <div class="highlight"></div>
                </div>

                <div class="search-projet">
                    <label for="search_bar">Chercher un projet :</label>
                    <input type=search id="search_bar" name="search" onkeyup="search_projet()" type="text" placeholder="ex : Maquette, 2023...">
                </div>

                <div class="grid_cards" id='list'>

                    <div class="cards_item">
                        <a href="borne_BrewBike.php" target="_blank">
                            <div class="card">
                                <div class="card_image"><img src="images/BrewBike/BrewBike_borne.jpg" alt="Page d'accueil du Dahlia" loading="lazy"></div>
                                <div class="card_content">
                                    <h3>BrewBike</h3>
                                    <p class="card_text">Quiz et formation sur bornes pour la marque BrewBike</p>
                                    <div class="card_infos">
                                        <div class="card_projets_type">
                                            <p>sprint</p>
                                        </div>
                                        <div class="card_projets_type">
                                            <p>maquette</p>
                                        </div>
                                        <div class="card_date">
                                            <p>2023</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cards_item">
                        <a href="application_bubble.php" target="_blank">
                            <div class="card">
                                <div class="card_image"><img src="images/Bubble/Bubble_application.jpg" alt="" loading="lazy"></div>
                                <div class="card_content">
                                    <h3>Bubble ViewStat</h3>
                                    <p class="card_text">Logo, design et prototypage de A à Z du concept original d'application : Bubble</p>
                                    <div class="card_infos">
                                        <div class="card_projets_type">
                                            <p>maquette</p>
                                        </div>
                                        <div class="card_projets_type">
                                            <p>charte</p>
                                        </div>
                                        <div class="card_date">
                                            <p>2023</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cards_item">
                        <a href="site_HomeToGo.php" target="_blank">
                            <div class="card">
                                <div class="card_image"><img src="images/HomeToGo/HomeToGo_website.jpg" alt="" loading="lazy"></div>
                                <div class="card_content">
                                    <h3>HomeToGo</h3>
                                    <p class="card_text">ReDesign workshop pour le site HomeToGo</p>
                                    <div class="card_infos">
                                        <div class="card_projets_type">
                                            <p>maquette</p>
                                        </div>
                                        <div class="card_projets_type">
                                            <p>redesign</p>
                                        </div>
                                        <div class="card_date">
                                            <p>2023</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="cards_item">
                        <a href="application_ST.php" target="_blank">
                            <div class="card">
                                <div class="card_image"><img src="images/ST/ST_application.jpg" alt="" loading="lazy"></div>
                                <div class="card_content">
                                    <h3>SpeedTrott</h3>
                                    <p class="card_text">Maquette fictive pour l'application SpeedTrott.</p>
                                    <div class="card_infos">
                                        <div class="card_projets_type">
                                            <p>maquette</p>
                                        </div>
                                        <div class="card_date">
                                            <p>2023</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- <div class="cards_item">
                        <div class="card">
                            <div class="card_image"><img src="images/Dahlia/Dahlia_website.jpg" alt="Page d'accueil du Dahlia" loading="lazy"></div>
                            <div class="card_content">
                                <h3>Dahlia</h3>
                                <p class="card_text">(A venir) Maquette fictive pour le cabinet paysagiste Dahlia</p>
                                <div class="card_infos">
                                    <div class="card_projets_type">
                                        <p>maquette</p>
                                    </div>
                                    <div class="card_date">
                                        <p>2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    <div class="cards_item">
                        <a href="site_ovni_boost.php" target="_blank">
                            <div class="card">
                                <div class="card_image"><img src="images/Ovni_boost/OvniBoost_website.jpg" alt="Ovni Boost site" loading="lazy"></div>
                                <div class="card_content">
                                    <h3>Ovni Boost</h3>
                                    <p class="card_text">Maquettage et design du site Ovni Boost. Le site pour booster votre
                                        créativité.</p>
                                    <div class="card_infos">
                                        <div class="card_projets_type">
                                            <p>maquette</p>
                                        </div>
                                        <div class="card_date">
                                            <p>2023</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="cards_item">
                        <a href="site_ggraph.php" target="_blank">
                            <div class="card">
                                <div class="card_image"><img src="images/Ggraph/Ggraph_website.jpg" alt="Ggraph site" loading="lazy"></div>
                                <div class="card_content">
                                    <h3>Ggraph</h3>
                                    <p class="card_text">Maquettage et design du site responsive Ggraph. Le site pour découvrir le street art.</p>
                                    <div class="card_infos">
                                        <div class="card_projets_type">
                                            <p>maquette</p>
                                        </div>
                                        <div class="card_projets_type">
                                            <p>charte</p>
                                        </div>
                                        <div class="card_date">
                                            <p>2023</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="cards_item">
                        <a href="application_veterinaire.php" target="_blank">
                            <div class="card">
                                <div class="card_image"><img src="images\Izzy\Izzy_application_mobile.png" alt="Izzy application" loading="lazy"></div>
                                <div class="card_content">
                                    <h3>Izzy</h3>
                                    <p class="card_text">Maquettage et design de l'application mobile Izzy. L'application entre vétérinire et patient.</p>
                                    <div class="card_infos">
                                        <div class="card_projets_type">
                                            <p>maquette</p>
                                        </div>
                                        <div class="card_date">
                                            <p>2023</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="cards_item">
                        <a href="application_spatiale.php" target="_blank">
                            <div class="card">
                                <div class="card_image"><img src="images/Oxo/Oxo_application_mobile.png" alt="Oxo application" loading="lazy"></div>
                                <div class="card_content">
                                    <h3>Oxo</h3>
                                    <p class="card_text">Maquettage et design de l'application mobile Oxo. L'application qui vous fait
                                        découvrir l'espace.</p>
                                    <div class="card_infos">
                                        <div class="card_projets_type">
                                            <p>maquette</p>
                                        </div>
                                        <div class="card_date">
                                            <p>2023</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- <div class="cards_item">
                        <a href="application_de_voyage.php" target="_blank">
                            <div class="card">
                                <div class="card_image"><img src="images/Loxo/Loxo_application_mobile.jpg" alt="Loxo application" loading="lazy"></div>
                                <div class="card_content">
                                    <h3>Loxo</h3>
                                    <p class="card_text">Maquettage et design de l'application mobile Izzy. L'application pour voyager
                                        de manière responsable</p>
                                    <div class="card_infos">
                                        <div class="card_projets_type">
                                            <p>maquette</p>
                                        </div>
                                        <div class="card_date">
                                            <p>2023</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div> -->

                    <div class="cards_item">
                        <div class="card">
                            <div class="card_image"><img src="images/Crypto/Crypto1.png" alt="Crypto charte graphique" loading="lazy"></div>
                            <div class="card_content">
                                <h3>Crypto</h3>
                                <p class="card_text">Création d'une charte graphique avec pour thème les cryptomonnaies sous forme de livret.</p>
                                <div class="card_infos">
                                    <div class="card_projets_type">
                                        <p>charte</p>
                                    </div>
                                    <div class="card_date">
                                        <p>2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </section>

            <section id="videos">
                <?php include("slider_video.php"); ?>
            </section>
            <!-- <span id="dots"></span>
            <span id="more" class="display-more"> -->
            <!-- <div class="grid_cards" id='list'>

                <div class="cards_item">
                    <a href="application_spatiale.php" target="_blank">
                        <div class="card">
                            <div class="card_image"><img src="images/Oxo/Oxo_application_mobile.png" alt="Oxo application" loading="lazy"></div>
                            <div class="card_content">
                                <h3>Oxo</h3>
                                <p class="card_text">Maquettage et design de l'application mobile Oxo. L'application qui vous fait
                                    découvrir l'espace.</p>
                                <div class="card_infos">
                                    <div class="card_projets_type">
                                        <p>maquette</p>
                                    </div>
                                    <div class="card_date">
                                        <p>2023</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
               
            </div>
            </span> -->
            <!-- <div class="btn-more">
                <button onclick="EnSavoirPlus()" class="btn btn-secondary" id="btn-more">Voir plus de projets</button>
            </div> -->

            <section class="container" id="savoir-faire">

                <div class="outils">
                    <div class="outils-header">
                        <!-- <h4>#SAVOIR-FAIRE</h4> -->
                        <h2>Mes outils</h2>
                        <div class="highlight"></div>
                    </div>

                    <div class="tabs">
                        <div class="tab-registers">
                            <button class="active-tab">Développement</button>
                            <button>Design</button>
                            <button>Vidéo</button>
                        </div>
                        <div class="tab-bodies">
                            <div style="display:block;">
                                <img class="outils-icon" alt="html5" loading="lazy" src="icons/HTML5_logo.svg" />
                                <img class="outils-icon" alt="css3" loading="lazy" src="icons/CSS3_logo.svg" />
                                <img class="outils-icon" alt="javascript" loading="lazy" src="icons/JavaScript_logo.svg" />
                                <img class="outils-icon" alt="php" loading="lazy" src="icons/Php_logo.svg" />
                                <img class="outils-icon" alt="indesign" loading="lazy" src="icons/React.svg" />
                                <img class="outils-icon" alt="indesign" loading="lazy" src="icons/Wordpress_logo.svg" />
                                <img class="outils-icon" alt="indesign" loading="lazy" src="icons/Github_logo.svg" />
                                <!-- <img class="outils-icon" alt="indesign" loading="lazy" src="icons/Vue_js.svg" /> -->
                                <img class="outils-icon" alt="Jira" loading="lazy" src="icons/Jira_logo.svg" />

                            </div>
                            <div style="display:none;">
                                <img class="outils-icon" alt="figma" loading="lazy" src="icons/Figma_logo.svg" />
                                <img class="outils-icon" alt="figma" loading="lazy" src="icons/Adobe_XD_CC_icon.svg" />
                                <img class="outils-icon" alt="illustrator" loading="lazy" src="icons/Adobe_Illustrator_CC_icon.svg" />
                                <img class="outils-icon" alt="photoshop" loading="lazy" src="icons/Adobe_Photoshop_CC_icon.svg" />
                                <img class="outils-icon" alt="indesign" loading="lazy" src="icons/Adobe_InDesign_CC_icon.svg" />
                            </div>
                            <div style="display:none;">
                                <img class="outils-icon" alt="première" loading="lazy" src="icons/Adobe_Premiere_Pro_CC_icon.svg" />
                                <img class="outils-icon" alt="after-effect" loading="lazy" src="icons/Adobe_After_Effects_CC_icon.svg" />
                                <img class="outils-icon" alt="after-effect" loading="lazy" src="icons/Unreal_Engine.svg" />
                                <img class="outils-icon" alt="after-effect" loading="lazy" src="icons/Blender_logo.svg" />
                            </div>
                        </div>
                    </div>

                    <div class="outils-content">
                        <div class="outils-description">
                            <p>
                                Ma formation et mes expériences m’ont permis d’acquérir une certaine maîtrise des
                                logiciels
                                phares de la <strong>suite Adobe</strong>, ainsi qu’une bonne
                                approche des outils de prototypage tel que <strong>Figma</strong>. Curieux et
                                autonome, j’aime découvrir et
                                me
                                former à de nouveaux outils comme j’ai pu
                                le faire avec <strong>Jira, Trello,</strong> pour me perfectionner dans la
                                <strong>gestion de projet digital.</strong>
                            </p>
                            <div class="badge">
                                <a href="pdf/Nicolas_CHONAVEY_CV.pdf" target="_blank">
                                    <button class="btn btn-primary">Télécharger CV</button></a>
                                <!-- <i class="bi bi-download"></i> -->
                            </div>
                        </div>

                    </div>
                </div>
            </section>


            <section class="container" id="competences">
                <div class="competences-header">
                    <!-- <h4>#COMPÉTENCES</h4> -->
                    <h2>Mes domaines d'expertises</h2>
                    <div class="highlight"></div>
                </div>

                <div class="competences-list" id="list">
                    <div class="competence">
                        <img class="competence_illustration" alt="illustration d'un développeur" loading="lazy" src="images/Communication_et_marketing.png">
                        <div class="competence-body">
                            <h4>Développement Web</h4>
                            <p> Du design à la mise en ligne de votre site. Développement de la partie front-end de site web
                                via HTML, CSS,
                                JavaScript ou CMS (Wordpress...). Maitrise d’autres langages de programmation (php et
                                Frameworks Js...)</p>
                        </div>
                    </div>

                    <div class="competence">
                        <img class="competence_illustration" alt="illustration d'un UX designer en train de travailler" loading="lazy" src="images/Communication_et_marketing.png">
                        <div class="competence-body">
                            <h4>UX Design</h4>
                            <p> Création d’expériences marquantes et engageantes pour chaque utilisateur. Repenser
                                l'interaction entre l'utilisateur et votre produit, en mettant l'accent sur la
                                satisfaction
                                et la facilité d'utilisation.</p>
                        </div>
                    </div>

                    <div class="competence">
                        <img class="competence_illustration" alt="illustration d'une interface mobile" loading="lazy" src="images/Communication_et_marketing.png">
                        <div class="competence-body">
                            <h4>UI Design</h4>
                            <p> Sublimer l'expérience de vos utilisateurs grâce à des interfaces épurées et intuitives.
                                Création de prototypes et maquettes graphiques interactives, ergonomiques et de design system, optimisées pour tout
                                support.</p>
                        </div>
                    </div>

                    <div class="competence">
                        <img class="competence_illustration" alt="illustration d'un homme portant un message" loading="lazy" src="images/Communication_et_marketing.png">
                        <div class="competence-body">
                            <h4>Communication & marketing</h4>
                            <p> A travers des cours théoriques et par le travail chez Digital Solutions, j'ai fait l'expérience de l'élaboration d'une stratégie marketing ainsi que de son déploiement.
                                La communication m'a permis de promouvoir la marque et ses
                                services au travers du storytelling, de la culture d'entreprise et du community management aussi bien en français qu'en anglais.
                            </p>
                        </div>
                    </div>

                    <div class="competence">
                        <img class="competence_illustration" alt="Une main entrain de dessiner" loading="lazy" src="images/Communication_et_marketing.png">
                        <div class="competence-body">
                            <h4>Graphisme & vidéo</h4>
                            <p> Mes compétences en graphisme et vidéo sont solides et variées. Je réalise des créations
                                visuelles telles que des logos et des chartes graphiques. Au travers des mini-reportages
                                et
                                interviews, j'ai pu expérimenter l'ensemble des métiers de la chaîne de production
                                vidéo, du
                                technicien du son, au journaliste, monteur, mixeurs son, spécialiste vfx.</p>
                        </div>
                    </div>
                    <div class="competence">
                        <img class="competence_illustration" alt="illustration d'un calendrier" loading="lazy" src="images/Communication_et_marketing.png">
                        <div class="competence-body">
                            <h4>Gestion de projet</h4>
                            <p> Grâce à mes formations complémentaires et mes expériences en entreprise, j'ai appris à
                                définir, planifier et
                                répartir les tâches efficacement. Dans le cadre de la méthodologie agile et SCRUM j'ai
                                pu
                                mettre en place lors de sprint un suivi des user stories sur des outils comme Jira,
                                Trello, etc...</p>
                        </div>
                    </div>


                    <!--  <div class="competences-list">

                  <div class="item" id="developpement" onclick="ListeDepliante(this)">
                    <div class="item-title">
                        <h4>Développement Web</h4>
                        <button class="btn-list">+</button>
                    </div>
                    <div class="item-plus">
                        <p class="texte" style="display:none">Du design à la mise en ligne de votre site. Développement de la partie front-end de site web
                            que ce soit en code dur via HTML, CSS, JavaScript, ReactJS ou via CMS (Wordpress, WebFlow). Je maîtrise également d’autres langages de programmation pour la partie back-end php notamment.
                        </p>
                        <img class="competence_illustration" style="display:none" alt="illustration d'un développeur" loading="lazy" src="images/3D_Développeur.png">
                    </div>
                </div>

                <div class="item" id="uxdesign" onclick="ListeDepliante(this)">
                    <div class="item-title">
                        <h4>UX Design</h4>
                        <button class="btn-list">+</button>
                    </div>
                    <div class="item-plus">
                        <p class="texte" style="display:none">Création d’expériences marquantes et engageantes pour chaque utilisateur. Repenser
                            l'interaction entre l'utilisateur et votre produit, en mettant l'accent sur la
                            satisfaction et la facilité d'utilisation.</p>
                        <img class="competence_illustration" style="display:none" alt="illustration d'un développeur" loading="lazy" src="images/3D_UX_designer.png">
                    </div>
                </div>

                <div class="item" id="uidesign" onclick="ListeDepliante(this)">
                    <div class="item-title">
                        <h4>UI Design</h4>
                        <button class="btn-list">+</button>
                    </div>
                    <div class="item-plus">
                        <p class="texte" style="display:none">Sublimer l'expérience de vos utilisateurs grâce à des interfaces épurées et intuitives.
                            Création de maquettes graphiques ergonomiques et de design system, optimisées pour tout
                            support.</p>
                        <img class="competence_illustration" style="display:none" alt="illustration d'un développeur" loading="lazy" src="images/3D_UI_designer.png">
                    </div>
                </div>

                <div class="item" id="com&marketing" onclick="ListeDepliante(this)">
                    <div class="item-title">
                        <h4>Communication & marketing</h4>
                        <button class="btn-list">+</button>
                    </div>
                    <div class="item-plus">
                        <p class="texte" style="display:none">Le développement de la stratégie marketing ainsi que son déploiement sont essentiels à la
                            réussite de l'entreprise. La communication au travers du storytelling et du community
                            management permet quant à elle de mettre en avant et de promouvoir la marque et ses
                            réalisations. C'est pourquoi j'ai énormément appris durant mes alternances en marketing et communication. Je communique aisément en anglais et je progresse chaque jour en espagnol.</p>
                        <img class="competence_illustration" style="display:none" alt="illustration d'un développeur" loading="lazy" src="images/3D_Communication_et_marketing.png">
                    </div>
                </div>
                <div class="item" id="graphisme&video" onclick="ListeDepliante(this)">
                    <div class="item-title">
                        <h4>Graphisme & vidéo</h4>
                        <button class="btn-list">+</button>
                    </div>
                    <div class="item-plus">
                        <p class="texte" style="display:none">Mes compétences en graphisme et vidéo sont solides et variées. Je réalise des créations
                            visuelles telles que des logos et des chartes graphiques. Au travers des mini-reportages
                            et interviews, j'ai pu expérimenter l'ensemble des métiers de la chaîne de production
                            vidéo, du technicien du son, au journaliste, monteur, mixeurs son, spécialiste vfx.</p>
                        <img class="competence_illustration" style="display:none" alt="illustration d'un développeur" loading="lazy" src="images/3D_Graphisme_et_vidéo.png">
                    </div>
                </div>

                <div class="item" id="gestiondeprojet" onclick="ListeDepliante(this)">
                    <div class="item-title">

                        <h4>Gestion de projet</h4>
                        <button class="btn-list">+</button>
                    </div>
                    <div class="item-plus">
                        <p class="texte" style="display:none">Grâce à mes formations complémentaires et mes expériences en entreprise, j'ai appris à
                            définir, planifier et
                            répartir les tâches efficacement. Dans le cadre de la méthodologie agile et SCRUM j'ai
                            pu mettre en place lors de sprint un suivi des user stories sur des outils comme Jira,
                            Trello, etc...</p>
                        <img class="competence_illustration" style="display:none" alt="illustration d'un développeur" loading="lazy" src="images/3D_Gestion_de_projet.png">
                    </div>
                </div>
            </div> -->

            </section>

            <!-- FORMULAIRE -->
            <section class="container" id="contact">
                <div class="contact-header" id="contact-header">
                    <!-- <h4>#CONTACT</h4> -->
                    <h2>Me contacter</h2>
                    <div class="highlight" src="images/Logo.svg"></div>
                </div>
                <div class="contact-content">

                    <?php include("formulaire.php"); ?>

                    <div class="contact-description">
                        <div class="contact-text">
                            <a href="mailto:nicolaschonavey@gmail.com">
                                <p><strong>nicolaschonavey@gmail.com</strong>
                            </a>
                            </p>
                        </div>
                        <div class="contact-text">
                            <a href="tel:0587878787">
                                <p><strong>07 89 53 06 74</strong></p>
                            </a>
                        </div>
                        <div class="contact-text">
                            <a href="https://www.google.com/maps/place/Lyon/@45.7580409,4.7527285,12z/data=!3m1!4b1!4m6!3m5!1s0x47f4ea516ae88797:0x408ab2ae4bb21f0!8m2!3d45.764043!4d4.835659!16zL20vMGRwcmc?entry=ttu" target="_blank">
                                <p><strong>69600 Oullins, France</strong></p>
                            </a>
                        </div>
                        <div class="contact-text">
                            <a href="https://www.linkedin.com/in/nicolas-chonavey-8964a1175/" target="_blank">
                                <p><strong>LinkedIn</strong></p>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- <div class="scroll_to_top">
            <a href="#top"><i class="bi bi-arrow-up-circle-fill" alt="Retourner en haut"></i></a>
        </div> -->
            <?php include("scroll_to_top.php"); ?>
            <?php include("reseaux_sociaux.php"); ?>
            <!-- FORMULAIRE -->
        </main>
        <?php include("footer.php"); ?>
    </section>
    <script src="js/menu.js">
    </script>
    <script src="js/en_savoir_plus.js">
    </script>
    <script src="js/onglet.js">
    </script>
    <script src="js/disparition_on_scroll.js">
    </script>
    <script src="js/deplier.js">
    </script>
    <script src="js/search_bar.js">
    </script>
    <script src="js/cursor.js">
    </script>
    <script src="js/file_preview.js">
    </script>
    <script src="js/liste_depliante.js">
    </script>
    <script src="js/slider_video.js">
    </script>

</body>

</html>