<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>application_veterinaire</title>
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
    <link rel="stylesheet" href="styles/slider_video.css">
    <!-- Bootstrap Font Icon CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="shortcut icon" type="image" href="images/Logo_simplifie.png" />
</head>

<!-- <body>
    <div class="slider_video">
        <div class="video-container">
            <video controls muted width="430" height="260" controls>
                <source src="vidéos/video_eve.mp4#t=14" type=video/mp4>
            </video>
        </div>

        <div class="video-container">
            <video controls muted width="430" height="260" controls>
                <source src="vidéos/video_newsFM.mp4" type=video/mp4>
            </video>
        </div>

        <div class="video-container">
            <video controls muted width="430" height="260" controls>
                <source src="vidéos/video_superdry.mp4#t=1" type=video/mp4>
            </video>
        </div>

        <div class="video-container">
            <video controls muted width="430" height="260" controls>
                <source src="vidéos/video_zlan.mp4#t=1" type=video/mp4>
            </video>
        </div>

        <div class="video-container">
            <video controls muted width="430" height="260" controls>
                <source src="vidéos/video_iphone11.mp4#t=1" type=video/mp4>
            </video>
        </div>
    </div>
</body>-->

<body>
    <div class="slider-video">
        <div class="slider-content">
            <div class="video-container">
                <video controls muted width="430" height="260" controls>
                    <source src="vidéos/video_eve.mp4#t=14" type=video/mp4>
                </video>
            </div>

            <div class="video-container">
                <video controls muted width="430" height="260" controls>
                    <source src="vidéos/video_newsFM.mp4" type=video/mp4>
                </video>
            </div>

            <div class="video-container">
                <video controls muted width="430" height="260" controls>
                    <source src="vidéos/video_superdry.mp4#t=1" type=video/mp4>
                </video>
            </div>

            <div class="video-container">
                <video controls muted width="430" height="260" controls>
                    <source src="vidéos/video_zlan.mp4#t=1" type=video/mp4>
                </video>
            </div>

            <div class="video-container">
                <video controls muted width="430" height="260" controls>
                    <source src="vidéos/video_iphone11.mp4#t=1" type=video/mp4>
                </video>
            </div>
            <!-- Ajoutez d'autres vidéos ici -->
        </div>
        <button class="prev-button" onclick="moveSlider(-1)"><i class="bi bi-arrow-left-circle-fill"></i></button>
        <button class="next-button" onclick="moveSlider(1)"><i class="bi bi-arrow-right-circle-fill"></i></button>
    </div>
</body>