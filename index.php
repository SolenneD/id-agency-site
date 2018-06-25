<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Paceme - Laissez votre corps guider la musique</title>

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
                    <input type="checkbox" />
                    <span></span>
                    <span></span>
                    <span></span>
                    <div id="menu">
                        <a href="index.php">Home</a>
<!--                        <a href="labague.php">La Bague</a>-->
                        <a href="solo.php">Les Modes</a>
                        <a href="propos-nous.php">À propos</a>
                        <a href="contact.php">Contact</a>
                        <a href="mentions-legales.php">Mentions Légales</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <!--video futur arriere plan-->
    <section id="accueil">
        <div class="title-home">
            <p class="title-accueil">Découvrez votre niveau de Rock’Attitude !</p>
            <a onClick="_gaq.push(['_trackEvent', 'Test Questionnaire', 'Clic', 'Pace Me']);" title="Test Home Page" href="qintro.php" class="btn btn-question">Commencer le test</a>
        </div>

        <div class="courbe">
            <img src="src/vector-accueil.png" alt="bague" class="courbe_image">
            <i class="fas fa-angle-down fa-2x" style="color: #000000"></i>
        </div>


    </section>
    <div class="parallax"></div>
    <!--notre concept-->
    <section id="notre-concept" class="container col-10 row">
        <article class="col-6">
            <div class="rond-myapp" style="background-image: url(src/onde-points.png);">
    </div>
        </article>
        <article class="col-6">
            <div class="right">

                <div class="trait"></div>
                <h2>Notre Concept</h2>
                <p>Pace Me synchronise la musique à votre rythme cardiaque pendant l’acte sexuel. Laissez notre application gérer la musique.</p>
                <a onClick="_gaq.push(['_trackEvent', 'Vers les Modes', 'Clic', 'Pace Me']);" title="Modes Home Page" href="duo.php" class="btn">Vers les modes</a>
                <div class="concept-compatible">
                    <p>* Compatible avec : Applewatch, Fitbit, Samsung watch, Huawei watch.</p>
                    <p>* Se connecter avec son compte Deezer et Spotify</p>
                </div>

            </div>
        </article>
    </section>
    <div class="parallax"></div>
    <section id="notre-bague" class="container col-10 row" style="margin-bottom: 0">
        <article style="margin-right: 3%" class="col-6">
            <div class="right">
                <div class="trait"></div>
                <h2>La Bague</h2>
                <p>Cette bague connectée récupère vos pulsations cardiaque afin que la musique se synchronise à votre rythme.</p>
<!--                <a style="position: relative;z-index: 2;" href="labague.php" class="btn">Découvrez la bague</a>-->
            </div>
        </article>
        <article class="col-6">
            <div class="rond-bague">
            </div>
        </article>
    </section>
    <div class="parallax"></div>
    <!--<img  src="src/onde-points-noir.png">-->
    <div class="onde-noir"></div>
    <footer class="footer">

        <div class="img-footer">
            <img src="src/vague-footer.png">
            <div class="rs-desktop">
                <a onClick="_gaq.push(['_trackEvent', 'Facebook Home', 'Clic', 'Pace Me']);" title="Facebook Home" href="https://www.facebook.com/pacemerock/" target="_blank"><i style="color: #000000" class="fab fa-facebook-f"></i></a>
                <a onClick="_gaq.push(['_trackEvent', 'Instagram Home', 'Clic', 'Pace Me']);" title="Instagram Home" href="https://www.instagram.com/paceme_rock/" target="_blank"><i style="color: #000000" class="fab fa-instagram"></i></a>
                <a onClick="_gaq.push(['_trackEvent', 'Twitter Home', 'Clic', 'Pace Me']);" title="Twitter Home" href="https://twitter.com/paceme_rock" target="_blank"><i style="color: #000000" class="fab fa-twitter"></i></a>
                <a onClick="_gaq.push(['_trackEvent', 'Soundcloud Home', 'Clic', 'Pace Me']);" title="Soundcloud Home" href="https://soundcloud.com/paceme_rock" target="_blank"><i style="color: #000000" class="fab fa-soundcloud"></i></a>
            </div>

            <div class="rs-mobile">
                <a onClick="_gaq.push(['_trackEvent', 'Facebook Home', 'Clic', 'Pace Me']);" title="Facebook Home" href="https://www.facebook.com/pacemerock/" target="_blank"><i style="color: #000000" class="fab fa-facebook-f fa-2x"></i></a>
                <a onClick="_gaq.push(['_trackEvent', 'Instagram Home', 'Clic', 'Pace Me']);" title="Instagram Home" href="https://www.instagram.com/paceme_rock/" target="_blank"><i style="color: #000000" class="fab fa-instagram fa-2x"></i></a>
                <a onClick="_gaq.push(['_trackEvent', 'Twitter Home', 'Clic', 'Pace Me']);" title="Twitter Home" href="https://twitter.com/paceme_rock" target="_blank"><i style="color: #000000" class="fab fa-twitter fa-2x"></i></a>
                <a onClick="_gaq.push(['_trackEvent', 'Soundcloud Home', 'Clic', 'Pace Me']);" title="Soundcloud Home" href="https://soundcloud.com/paceme_rock" target="_blank"><i style="color: #000000" class="fab fa-soundcloud fa-2x"></i></a>
            </div>
        </div>

    </footer>

    <script>
        var pageTracker = _gat._getTracker('UA-120265874-1');
        pageTracker._trackPageview();
    </script>


</body>
</html>
