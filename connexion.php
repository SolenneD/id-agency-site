<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Pace Me - Les modes</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120265874-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-120265874-1');
    </script>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KPP7XMR');</script>
    <!-- End Google Tag Manager -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Synchronisez passion musicale et plaisir infini avec votre nouvelle bague connectée">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="icon" type="image/png" href="src/favicon.png" />
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

    <!--analytics-->
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-120265874-1']);
        _gaq.push(['_trackEvent']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>
</head>
<body>
<?php include("include/headerWhite.php") ?>

<section id="page-connexion" class="container col-10">
    <div class="trait"></div>
    <h2>Les modes</h2>

    <p style="width: auto">Choississez votre plateforme de musique</p>

    <div class="margin row">
            <a href="deezer_auth.php" class="musique-mode deezer"></a>
            <p class="musique-mode spotify avenir"></p>
            <p class="musique-mode youtube avenir"></p>
    </div>




</section>
<footer class="footer">

    <div class="img-footer">
        <img alt="" src="src/modes/footer-mode.svg">

        <div class="rs-desktop">
            <a href="https://www.facebook.com/pacemerock/" target="_blank"><i style="color: #000000" class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/paceme_rock/" target="_blank"><i style="color: #000000" class="fab fa-instagram"></i></a>
            <a href="https://twitter.com/paceme_rock" target="_blank"><i style="color: #000000" class="fab fa-twitter"></i></a>
            <a href="https://soundcloud.com/paceme_rock" target="_blank"><i style="color: #000000" class="fab fa-soundcloud"></i></a>
        </div>

        <div class="rs-mobile">
            <a href="https://www.facebook.com/pacemerock/" target="_blank"><i style="color: #000000" class="fab fa-facebook-f fa-2x"></i></a>
            <a href="https://www.instagram.com/paceme_rock/" target="_blank"><i style="color: #000000" class="fab fa-instagram fa-2x"></i></a>
            <a href="https://twitter.com/paceme_rock" target="_blank"><i style="color: #000000" class="fab fa-twitter fa-2x"></i></a>
            <a href="https://soundcloud.com/paceme_rock" target="_blank"><i style="color: #000000" class="fab fa-soundcloud fa-2x"></i></a>
        </div>
    </div>

</footer>



</body>
</html>