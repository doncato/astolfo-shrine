<?php
    $gallery_filelist_full = scandir("images");
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
            <h1>Astolfo</h1>
        </div>
        <div class="audio">
            <audio controls autoplay>
                <source src="/audio/astolfo-bgm.mp3" type="audio/mpeg">
            </audio>
        </div>
        </div>
        <div class="gallery">
            <?php
                foreach ($gallery_filelist_full as &$element) {
                    if (str_contains($element, "astolfo")) {
                        echo "<a href=\"images/".$element."\" data-lightbox=\"gallery\"><img src=\"images/".$element."\"></a>";
                    }
                }
            ?>
            <!--
            <a href="images/astolfo (106).jpg" data-lightbox="gallery"><img src="images/astolfo (106).jpg"></a>
            <a href="images/astolfo (107).jpg" data-lightbox="gallery"><img src="images/astolfo (107).jpg"></a>
            <a href="images/astolfo (1001).jpg" data-lightbox="gallery"><img src="images/astolfo (1001).jpg"></a>
            <a href="images/astolfo (1002).jpg" data-lightbox="gallery"><img src="images/astolfo (1002).jpg"></a>
            <a href="images/astolfo (1004).jpg" data-lightbox="gallery"><img src="images/astolfo (1004).jpg"></a>
            <a href="images/astolfo (1005).jpg" data-lightbox="gallery"><img src="images/astolfo (1005).jpg"></a>
            <a href="images/astolfo (1006).jpg" data-lightbox="gallery"><img src="images/astolfo (1006).jpg"></a>
            <a href="images/astolfo (1007).jpg" data-lightbox="gallery"><img src="images/astolfo (1007).jpg"></a>
            <a href="images/astolfo (1059).jpg" data-lightbox="gallery"><img src="images/astolfo (1059).jpg"></a>
            <a href="images/astolfo (1060).jpg" data-lightbox="gallery"><img src="images/astolfo (1060).jpg"></a>
            <a href="images/astolfo (1061).jpg" data-lightbox="gallery"><img src="images/astolfo (1061).jpg"></a>
            <a href="images/astolfo (1062).jpg" data-lightbox="gallery"><img src="images/astolfo (1062).jpg"></a>
            <a href="images/astolfo (1063).jpg" data-lightbox="gallery"><img src="images/astolfo (1063).jpg"></a>
            <a href="images/astolfo (1064).jpg" data-lightbox="gallery"><img src="images/astolfo (1064).jpg"></a>
            <a href="images/astolfo (1065).jpg" data-lightbox="gallery"><img src="images/astolfo (1065).jpg"></a>
            <a href="images/astolfo (1066).jpg" data-lightbox="gallery"><img src="images/astolfo (1066).jpg"></a>
            <a href="images/astolfo (1067).jpg" data-lightbox="gallery"><img src="images/astolfo (1067).jpg"></a>
            <a href="images/astolfo (1068).jpg" data-lightbox="gallery"><img src="images/astolfo (1068).jpg"></a>
            <a href="images/astolfo (1069).jpg" data-lightbox="gallery"><img src="images/astolfo (1069).jpg"></a>
            <a href="images/astolfo (1090).jpg" data-lightbox="gallery"><img src="images/astolfo (1090).jpg"></a>
            <a href="images/astolfo (1091).jpg" data-lightbox="gallery"><img src="images/astolfo (1091).jpg"></a>
            <a href="images/astolfo (1092).jpg" data-lightbox="gallery"><img src="images/astolfo (1092).jpg"></a>
            <a href="images/astolfo (1093).jpg" data-lightbox="gallery"><img src="images/astolfo (1093).jpg"></a>
            <a href="images/astolfo (1094).jpg" data-lightbox="gallery"><img src="images/astolfo (1094).jpg"></a>
            -->
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
