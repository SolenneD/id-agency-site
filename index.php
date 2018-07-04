<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Pace Me - Laissez votre corps guider la musique</title>

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
    <script src="js/custom.js"></script>
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
<body class="vague-bottom-propos">

<header>
    <h1 class="logo">
        <a href="http://www.paceme.fr/">
            <img src="src/logo-blanc/logo-desktop-blanc.png" alt="logo-paceme" class="desktop">
            <img src="src/logo-blanc/logo-tablette-blanc.png" alt="logo-paceme" class="tablette">
            <img src="src/logo-blanc/logo-mobile-blanc.png" alt="logo-paceme" class="mobile">
        </a>
    </h1>
    <div class="menu blanc">
        <nav role="navigation" id="burger">
            <div id="menuToggle">
                <input id="btn-header" type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
                <div class="active_header" id="menu">
                    <a href="index.php">Home</a>
                    <a href="labague.php">La Bague</a>
                    <a href="connexion.php?mode=solo">Les Modes</a>
                    <a href="propos-nous.php">À propos</a>
                    <a href="contact.php">Contact</a>
                    <a href="src/kit-presse/kit-presse.zip" download="kit-presse">Kit Presse</a>
                </div>
            </div>
        </nav>
    </div>
</header>

<div class="wrapper-propos">

    <div id='stars2'></div>


    <section id="accueil">
        <div class="title-home">
            <h1 class="title-accueil">Pace Me, enfilez moi…</h1>
            <p class="description-index">Découvrez la bague connectée qui synchronise la musique à votre rythme lors de vos rapports charnels.</p>
            <a onClick="_gaq.push(['_trackEvent', 'Test Questionnaire', 'Clic', 'Pace Me']);" title="Test Home Page" href="q1.php" class="btn btn-question">Explorez-vous</a>
        </div>

        <div class="courbe">
            <img src="src/vector-accueil.png" alt="bague" class="courbe_image">
            <a class="js-scrollTo" href="#notre-concept"><i class="pulsate-fwd fas fa-angle-down fa-2x"></i></a>
        </div>


    </section>

    <!--notre concept-->
    <section id="notre-concept" class="container col-10 row">

        <article class="col-6">
            <div class="rond-myapp"><div class="app"></div></div>
        </article>
        <article class="col-6">
            <div class="right">

                <div id="trait" class="trait"></div>
                <h2>Notre Concept</h2>
                <p>Marre de Céline Dion en plein orgasme ? Glissez dans l’univers de Pace Me…
                    Découvrez l’application* qui adapte le rock’n’roll à votre rythme cardiaque à travers plusieurs modes de jeux.</p>
                <a onClick="_gaq.push(['_trackEvent', 'Vers les Modes', 'Clic', 'Pace Me']);" title="Modes Home Page" href="solo.php" class="btn">MONTREZ-MOI</a>
                <div class="concept-compatible">
                    <p>* Compatible avec : Applewatch, Fitbit, Samsung watch, Huawei watch.<br>
                        Se connecter avec son compte Deezer et Spotify</p>
                </div>

            </div>
        </article>
    </section>
    <section id="notre-bague" class="container col-10 row">

        <article class="col-6">
            <div class="right">
                <div id="trait2" class="trait"></div>
                <h2>La Bague</h2>
                <p>Pulpeuse et sensuelle, ses courbes s’accorderont à votre doigté. Créez la bague parfaite à votre image pour atteindre le nirvana.</p>
                <a id="lien-bague" href="labague.php" class="btn">POSSÉDEZ-MOI</a>
            </div>
        </article>
        <article class="col-6">
            <div class="rond-bague">
            </div>
        </article>

    </section>
    <div class="onde-noir"></div>

    <div class="push"></div>
</div>


<?php include("include/footerWhite.php") ?>

<script>
    var pageTracker = _gat._getTracker('UA-120265874-1');
    pageTracker._trackPageview();
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.js-scrollTo').on('click', function() { // Au clic sur un élément
            var page = $(this).attr('href'); // Page cible
            var speed = 750; // Durée de l'animation (en ms)
            $('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
            return false;
        });
    });
</script>

</body>
</html>
