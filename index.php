<?php
    $allow_nsfw = str_contains(strtoupper($_SERVER["QUERY_STRING"]), "NSFW");

    $host_ip = $_SERVER["SERVER_NAME"];

    $music_filelist_full = scandir("audio");

    $gallery_filelist_full = scandir("images");
    shuffle($gallery_filelist_full);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Astolfo Shrine</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
        <meta name="description" content="Astolfo Appreciation Shrine originally conceptioned by Sliden">
        <link rel="stylesheet" type="text/css" href="/css/style.css">
        <link rel="stylesheet" type="text/css" href="/css/lightbox.min.css">
        <link rel="preconnect" href="//sfonts.googleapis.com">
        <link rel="preconnect" href="//fonts.gstatic.com" crossorigin>
        <link href="//fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap" rel="stylesheet"> 
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2713216546990127"
     crossorigin="anonymous"></script>        
    </head>
    <body>
        <div class="container">
        <div class="typing-effect">
            <h1><a href="http://<?php echo $host_ip;?>">Astolfo</a></h1>
        </div>
        <div class="audio">
            <?php
                foreach ($music_filelist_full as $element) {
                    if (str_contains($element, "astolfo")) {
                        echo "<audio controls autoplay>
                            <source src=\"/audio/".$element."\" type=\"audio/mpeg\">
                        </audio>";
                    }
                }
            ?>
        </div>
        </div>
        <div class="gallery">
            <?php
                foreach ($gallery_filelist_full as &$element) {
                    if (str_contains($element, "astolfo") && (!str_contains($element, "nsfw") || $allow_nsfw)) {
                        echo "<a href=\"images/".$element."\" data-lightbox=\"gallery\"><img src=\"images/".$element."\"></a>";
                    }
                }
            ?>
        </div>
        <div class="bottom">
            <div id="info">
                <a href="https://sliden.me">Originally Made By Sliden<a>
            </div>
        </div>
    </body>
    <script src="/js/main.js"></script>
    <script src="/js/lightbox-plus-jquery.min.js"></script>
</html>
