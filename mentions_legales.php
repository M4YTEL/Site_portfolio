<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mentions_legales</title>
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
    <link rel="stylesheet" href="styles/mentions_legales.css">
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image" href="images/Logo_simplifie.svg" />
</head>


<body>
    <section class="container">
        <?php include("header.php"); ?>
        <main>
            <?php include("cursor.php"); ?>
            <div class="mention-container">
                <div class="mentions-header">
                    <h1>Mentions légales</h1>
                    <!-- <div class="highlight"></div> -->
                    <h4>Le site www.nicolas-chonavey.fr est la propriété de Nicolas Chonavey.</h4>
                </div>
                <div class="mentions-content">
                    <!-- Table des matières à mettre en hmlt css javascript -->
                    <!-- <h4 id="table_des_matieres">Table des matières</h4>
                 -->
                    <div class="mentions-list">

                        <div class="item" id="editeur" onclick="ListeDepliante(this)">
                            <div class="item-title">
                                <h4 id="editeur">Éditeur</h4>
                                <button class="btn-list">+</button>
                            </div>
                            <div class="item-plus">
                                <p class="texte" style="display:none">
                                    Nicolas Chonavey, France, Email : nicolaschonavey@gmail.com,
                                    <a href="index.php#contact"><u>Me contacter</u></a>
                                </p>
                                <!-- <img class="competence_illustration" style="display:none" alt="illustration d'un développeur" loading="lazy" src="images/3D_UX_designer.png"> -->
                            </div>
                        </div>
                        <div class="item" id="hebergement_du_site" onclick="ListeDepliante(this)">
                            <div class="item-title">
                                <h4 id="hebergement">Hébergement du site</h4>
                                <button class="btn-list">+</button>
                            </div>
                            <div class="item-plus">
                                <p class="texte" style="display:none">
                                    OVH SAS, 2 rue Kellermann – BP 80157, 59100 ROUBAIX CEDEX 1, FRANCE, Téléphone : 1007</p>
                                <!-- <img class="competence_illustration" style="display:none" alt="illustration d'un développeur" loading="lazy" src="images/3D_UI_designer.png"> -->
                            </div>
                        </div>
                        <div class="item" id="disponibilite_du_site" onclick="ListeDepliante(this)">
                            <div class="item-title">
                                <h4 id="disponibilite"> Disponibilité du site</h4>
                                <button class="btn-list">+</button>
                            </div>
                            <div class="item-plus">
                                <p class="texte" style="display:none">Les contenus présents sur le site www.nicolas-chonavey.fr (charte graphique, code html, articles, illustrations…) sont protégés au titre du droit d’auteur. L’ensemble des contenus sont la propriété exclusive de Nicolas Chonavey, à l’exception de certains contenus (textes, images) qui sont la propriété de leurs auteurs respectifs.
                                    Les contenus du site, à l’exception de ceux n’appartenant pas à Nicolas Chonavey ou faisant mention contraire, sont mis à disposition selon les termes de la Licence Creative Commons Attribution – Partage dans les Mêmes Conditions 4.0 International.
                                    Logo Creative Commons.
                                </p>
                                <!-- <img class="competence_illustration" style="display:none" alt="illustration d'un développeur" loading="lazy" src="images/3D_Développeur.png"> -->
                            </div>
                        </div>


                        <div class="item" id="contenu_du_site" onclick="ListeDepliante(this)">
                            <div class="item-title">
                                <h4 id="contenu">Contenu du site</h4>
                                <button class="btn-list">+</button>
                            </div>
                            <div class="item-plus">
                                <p class="texte" style="display:none"> Nicolas Chonavey s’efforce d’assurer l’exactitude
                                    et la mise à jour des informations diffusées sur ce site et se réserve le droit de modifier, à tout moment et sans préavis,
                                    le contenu ou la présentation de ce site.
                                </p>
                                <!-- <img class="competence_illustration" style="display:none" alt="illustration d'un développeur" loading="lazy" src="images/3D_Développeur.png"> -->
                            </div>
                        </div>

                        <!--
                    <p>STOP</p>


                <h3 id="propriete">Propriété intellectuelle</h3>
                <p>
                    Les contenus présents sur le site www.nicolas-chonavey.fr (charte graphique, code html, articles, illustrations…) sont protégés au titre du droit d’auteur. L’ensemble des contenus sont la propriété exclusive d’Nicolas Chonavey, à l’exception de certains contenus (textes, images) qui sont la propriété de leurs auteurs respectifs.
                    Les contenus du site, à l’exception de ceux n’appartenant pas à Nicolas Chonavey ou faisant mention contraire, sont mis à disposition selon les termes de la Licence Creative Commons Attribution – Partage dans les Mêmes Conditions 4.0 International.
                    Logo Creative Commons
                </p>

                <h3 id="liens">Liens hypertextes</h3>
                <p>Liens de www.nicolas-chonavey.fr vers d’autres sites
                    Les liens insérés dans les pages du site www.nicolas-chonavey.fr vers des sites tiers sont proposés à titre d’information ; le contenu des sites vers lesquels ces liens conduisent n’engage pas la responsabilité de Nicolas Chonavey.

                    Liens d’autres sites vers www.nicolas-chonavey.fr
                    Nicolas CHONAVEY ne peut être tenu responsable des liens hypertextes pointant vers www.nicolas-chonavey.fr.
                </p>


                <h3 id="liens_hypertexte">Établir un lien hypertexte vers www.nicolas-chonavey.fr</h3>

                <p>
                    L’établissement d’un lien hypertexte vers www.nicolas-chonavey.fr est libre et gratuit à la condition que cet hyperlien permette l’ouverture d’une nouvelle fenêtre de visualisation et que l’affichage de l’URL www.nicolas-chonavey.fr dans la nouvelle fenêtre soit lisible par l’internaute dès son ouverture et tout au long de l’accès aux données de www.nicolas-chonavey.fr.
                    Cette autorisation ne s’applique pas aux sites diffusant des informations à caractère polémique, pornographique, xénophobe ou pouvant, dans une plus large mesure porter atteinte à la sensibilité du plus grand nombre. L’existence de tels liens en provenance d’autres sites ne peut permettre d’induire qu’Nicolas Chonavey cautionne ces sites ou qu’il approuve leur contenu.
                </p>

                <h3 id="moderation"> Politique de modération </h3>

                <p>
                    Les commentaires du blog mis en place sur ce site sont modérés. La validation d’un commentaire est laissé à l’entière appréciation du directeur de publication. De ce fait, ils pourront être modifiés ou corrigés (orthographe et syntaxe) pour une meilleure compréhension des visiteurs.
                    Les commentaires diffusant des informations à caractère polémique, pornographique, xénophobe ou pouvant, dans une plus large mesure porter atteinte à la sensibilité du plus grand nombre, pourront faire l’objet d’une suppression immédiate.
                    L’internaute pourra signer son commentaire de son nom, de son pseudo ou du nom de son entreprise.
                </p>
                <h3 id="traitement_donnees"> Traitement des données à caractère personnel </h3>

                <p>
                    Quand vous laissez un commentaire sur www.nicolas-chonavey.fr, les données inscrites dans le formulaire de commentaire, mais aussi votre adresse IP et l’agent utilisateur de votre navigateur sont collectés pour détecter les commentaires indésirables à l’aide d’un service automatisé.
                    Par ailleurs, une chaîne anonymisée créée à partir de votre adresse de messagerie (également appelée hash) peut être envoyée au service Gravatar pour vérifier si vous utilisez ce dernier. Après validation de votre commentaire, votre photo de profil sera visible publiquement à coté de votre commentaire. Les clauses de confidentialité du service Gravatar sont disponibles ici : https://automattic.com/privacy/.
                    Si vous souhaitez publier un commentaire, ce dernier et ses métadonnées sont alors conservés indéfiniment. Cela permet de reconnaître et d’approuver automatiquement les commentaires suivants au lieu de les laisser dans la file de modération.
                </p>

                <h3 id="contact">Formulaires de contact</h3>

                <p>Les données transmises via le formulaire sont directement envoyées par e-mail à Nicolas Chonavey. Les données ne sont ni transmises à un tiers ni ré-utilisées d’une autre manière que pour répondre à la demande émise via le formulaire de contact.</p>


                <h3 id="contenu_embarque"> Contenu embarqué depuis d’autres sites</h3>

                <p>
                    Les articles de ce site peuvent inclure des contenus intégrés (par exemple des vidéos, images, articles…). Le contenu intégré depuis d’autres sites se comporte de la même manière que si le visiteur se rendait sur cet autre site. Ainsi, ces sites web pourraient collecter des données sur vous, utiliser des cookies, embarquer des outils de suivis tiers, suivre vos interactions avec ces contenus embarqués si vous disposez d’un compte connecté sur leur site web.
                    Ceci dit, le directeur de publication met un point d’honneur au respect de la vie privée. Ainsi, il est peu probable que vous rencontriez ce type de contenu.
                </p>

                <h3 id="mesure_audience">Mesure d’audience</h3>
                <p>
                    Pour obtenir des informations sur le comportement des visiteurs, le site utilise Ackee. Il s’agit d’un logiciel d’analyse respectueux de la vie privée. Il propose deux modes : détaillé ou non. Le premier mode permet par exemple d’obtenir des informations sur le système d’exploitation utilisé, le navigateur utilisé ou encore la langue. L’autre mode se contente de compter les visites et d’identifier les pages vues.
                    Vous pouvez en apprendre plus sur le fonctionnement et les données collectées en allant sur <u>le site d’Ackee</u>.
                    Par défaut ce site utilise le mode détaillé afin d’adapter plus facilement le site à ses visiteurs. Vous pouvez toutefois changer de mode à tout moment grâce au menu réglages du site situé à côté de la barre de navigation.
                </p>

                <h3 id="droits_donnees">Les droits que vous avez sur vos données</h3>

                <p>
                    Si vous avez laissé des commentaires sur le site, vous pouvez demander à recevoir un fichier contenant toutes les données personnelles que l’éditeur possède à votre sujet, incluant celles que vous nous avez fournies. Vous pouvez également demander la suppression des données personnelles vous concernant. Cela ne prend pas en compte les données stockées à des fins administratives, légales ou pour des raisons de sécurité.
                    Conformément à la loi « informatique et libertés » du 6 janvier 1978 modifiée en 2004, vous disposez d’un droit d’opposition (art.38), d’accès (art.39), de rectification ou de suppression (art.40) des données qui vous concernent. Vous pouvez exercer ce droit, en envoyant un courrier électronique à Nicolas Chonavey en justifiant de votre identité.
                </p> -->

                    </div>

                </div>

            </div>
    </section>
    <?php include("scroll_to_top.php"); ?>
    </main>
    <script src="js/menu.js">
    </script>
    <script src="js/disparition_on_scroll.js">
    </script>
    <script src="js/cursor.js">
    </script>
    <script src="js/liste_depliante.js">
    </script>
    <?php include("footer.php"); ?>
</body>