<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Pace Me - La bague</title>

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
<body class="vague-bottom-labague">
<?php include("include/headerWhite.php") ?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.0&appId=250004505760813&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<div class="fond-labague">
    <svg width="1280" height="752" viewBox="0 0 1280 752" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M722.5 1200C450.9 1093.2 127.667 1111.5 0 1134V0H1432.5L1416 1311C1078.5 1333.5 1062 1333.5 722.5 1200Z" transform="translate(-6.5 -571)" fill="white"/>
        <path d="M722.5 1200C450.9 1093.2 127.667 1111.5 0 1134V0H1432.5L1416 1311C1078.5 1333.5 1062 1333.5 722.5 1200Z" transform="translate(-6.5 -571)" fill="url(#paint0_linear)"/>
        <defs>
            <linearGradient id="paint0_linear" x2="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(306.459 1348) scale(786.583 780) rotate(-90)">
                <stop offset="8.07315e-10" stop-color="#BDBDBD"/>
                <stop offset="1" stop-color="white" stop-opacity="0"/>
            </linearGradient>
        </defs>
    </svg>

</div>
<section id="page-labague" class="container col-10">
    <article style="height: auto">
        <div class="trait"></div>
        <h2>La bague</h2>

        <div style="margin-bottom: 30px" class="video">Video</div>

        <div class="row cara-3">
            <div class="caracteristique col-3">
                <div id="cara"></div>
                <p>Suivi de votre rythme </p>
                <p>Caractéristiques</p>
            </div>
            <div class="caracteristique col-3">
                <div id="waterproof"></div>
                <p>Waterproof</p>
                <p>Vous pouvez vivre votre vie  sans vous souciez de votre bague, elle resiste à l’eau</p>
            </div>
            <div class="caracteristique col-3">
                <div id="autonomie"></div>
                <p>Autonomie</p>
                <p>Autonomie jusqu'à 7 jours sans avoir besoin de  recharger votre bague</p>
            </div>
        </div>

    </article>


</section>
<section style="height: auto" id="page-labague-custom" class="container col-10">
    <article class="col-10 clear">
        <div class="trait"></div>
        <h2>Personnalisez votre bague</h2>
    </article>
    <div class="row custom">
        <div class="bague-custom col-5">
            <img id="image_facebook" class="img-partager" style="width: 100%" src="src/motiv-rings.png" alt="">

        </div>
        <div class="col-4">
            <div>
                <h5>Matière / Couleur</h5>
                <div id="couleur" class="couleur row">
                    <div class="column-couleur">
                        <a id="noir" class="select active-select-couleur"></a>
                        <span>Noir</span>
                    </div>
                    <div class="column-couleur">
                        <a id="anthracite" class="select"></a>
                        <span>Anthracite</span>
                    </div>
                    <div class="column-couleur">
                        <a id="inox" class="select"></a>
                        <span>Inox</span>
                    </div>
                    <div class="column-couleur">
                        <a id="gris" class="select"></a>
                        <span>Acier</span>
                    </div>
                    <div class="column-couleur">
                        <a id="blanc" class="select"></a>
                        <span>Blanc</span>
                    </div>
                </div>
            </div>
            <div>
                <h5>Ornement</h5>
                <div id="ornement" class="ornement row">
                    <div class="column-couleur">
                        <a id="spike" class="select active-select-ornement"></a>
                        <span>Spikes</span>
                    </div>
                    <div class="column-couleur">
                        <a id="skull" class="select"></a>
                        <span>Skull</span>
                    </div>
                    <div class="column-couleur">
                        <a id="snake" class="select"></a>
                        <span>Snake</span>
                    </div>
                    <div class="column-couleur">
                        <a id="stone" class="select"></a>
                        <span>Stone</span>
                    </div>
                    <div class="column-couleur">
                        <a id="rose" class="select"></a>
                        <span>Rose</span>
                    </div>
                </div>
            </div>
            <div>
                <h5>Taille</h5>
                <div id="taille" class="taille row">
                    <div class="column-couleur">
                        <a id="t-48" class="select active-select-taille">48</a>
                    </div>
                    <div class="column-couleur">
                        <a id="t-49" class="select">49</a>
                    </div>
                    <div class="column-couleur">
                        <a id="t-50" class="select">50</a>
                    </div>
                    <div class="column-couleur">
                        <a id="t-51" class="select">51</a>
                    </div>
                    <div class="column-couleur">
                        <a id="t-52" class="select">52</a>
                    </div>
                    <div class="column-couleur">
                        <a id="t-53" class="select">53</a>
                    </div>
                    <div class="column-couleur">
                        <a id="t-54" class="select">54</a>
                    </div>
                </div>
            </div>
            <div>
                <form action="core/redirect-costum.php" method="post">
                    <p>
                        <label for="gravure">Gravure</label>
                        <input placeholder="Votre texte" type="text" id="gravure" name="gravure">
                    </p>

                    <p>
                        <label for="fonctionnalite">Et vous, quelle fonctionnalité imagineriez vous ?!</label>
                        <input placeholder="Facultatif" type="text" id="fonctionnalite" name="fonctionnalite">
                    </p>

                    <input type="submit">

                </form>
                
            </div>


        </div>

    </div>


</section>
<section id="page-labague-mode" class="container col-10">
    <article id="champ-mode">
    <p class="champ-mode-blanc">Quel mode est fait pour vous ?! <br>Découvrez votre niveau de Rock’Attitude !
    </p>
    <a style="position: relative;z-index: 2;color: #000000;background-color: #ffffff;margin: auto;" href="qintro.php" class="btn">Commencer le test</a>

</article>
</section>
<?php include("include/footerWhite.php") ?>


</body>
<script>
    var couleur = noir;
    var ornement = spikes;


    $("#taille .select").click(function() {
        $(".active-select-taille").removeClass("active-select-taille");
        $(this).addClass("active-select-taille");
    });

    $("#ornement .select").click(function() {
        $(".active-select-ornement").removeClass("active-select-ornement");
        $(this).addClass("active-select-ornement");
        ornement = $(this).attr('id');
        $.ajax({
            type : 'post',
            url : 'core/bague.php',
            data : {
                couleur:couleur,
                ornement:ornement
            }


        }).done(function(msg){
            $('#image_facebook').attr('src', msg);
        })

    });

    $("#couleur .select").click(function() {
        $(".active-select-couleur").removeClass("active-select-couleur");
        $(this).addClass("active-select-couleur");
        couleur = $(this).attr('id');
        $.ajax({
            type : 'post',
            url : 'core/bague.php',
            data : {
                couleur:couleur,
                ornement:ornement
            }


        }).done(function(msg){
            $('#image_facebook').attr('src', msg);
        })

    });


</script>
</html>