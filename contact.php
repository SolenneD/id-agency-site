<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Paceme - Contact</title>

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
<header class="header">
    <h1 class="logo">
        <a href="http://www.paceme.fr/">
            <img src="src/logo-noir/logo-desktop-noir.png" alt="logo-paceme" class="desktop">
            <img src="src/logo-noir/logo-tablette-noir.png" alt="logo-paceme" class="tablette">
            <img src="src/logo-noir/logo-mobile-noir.png" alt="logo-paceme" class="mobile">
        </a>
    </h1>
    <div class="menu">
            <nav role="navigation" id="burger">
                <div id="menuToggle">
                    <input type="checkbox" />
                    <span></span>
                    <span></span>
                    <span></span>
                    <div id="menu">
                        <a href="index.php">Home</a>
                        <a href="labague.php">La Bague</a>
                        <a href="solo.php">Les Modes</a>
                        <a href="propos-nous.php">À propos</a>
                        <a href="contact.php">Contact</a>
                        <a href="mentions-legales.php">Mentions Légales</a>
                    </div>
                </div>
            </nav>
        </div>

</header>

<section id="page-contact" class="container col-10">
    <section id="contact">
        <div class="trait"></div>
        <h2>Nous Contacter</h2>
        <p>Vous avez besoins de plus d’informations <br> ou bien vous désirez des réponses à vos questions ? <br>N’hésitez pas à nous contacter, nous sommes ici pour vous aider !</p>

        <form class="">
            <input required type="text" name="name" id="name" placeholder="Nom">
            <input required type="email" name="mail" id="email" placeholder="Adresse email">
            <textarea required name="message" placeholder="Message" id="message" tabindex="4" cols="30" rows="8"></textarea>

            <div id="btn-checkbox">
                <div class="align-input">
                    <input type="checkbox">
                    <label>S’inscrire à la newsletter</label>
                </div>
                <div class="align-input">
                    <a href="" download="kit-presse">
                        <div class="download"></div>
                        <p id="p-download">Télécharger le kit presse</p>
                    </a>
                </div>
            </div>


            <input class="btn-valid" type="submit" name="envoi" value="Envoyer">


        </form>

    </section>
</section>



<footer class="footer">


    <div class="img-footer">
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