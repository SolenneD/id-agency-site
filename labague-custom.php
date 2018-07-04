<?php

include('config/settings.php');
include('core/fbbague.php');

$bague = $db->prepare('SELECT * FROM bague');
//on execute la requete
$bague->execute();


?><!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Pace Me - La bague</title>



    <meta id="meta-images" property="og:url"           content="http://paceme.fr/<?php echo $image; ?>" />
    <meta property="og:type"          content="service" />
    <meta property="og:title"         content="Pace Me" />
    <meta property="og:description"   content="Personnaliser votre bague de plaisir avec Pace Me" />
    <meta id="meta-image" property="og:image"         content="http://paceme.fr/<?php echo $image; ?>"/>

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
    <meta name="description" content="Pace Me la bague connectée qui gère la musique rock pendant votre acte sexuel.">
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
<div class="wrapper-bague">

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.0&appId=250004505760813&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>

    <div class="labague"></div>
    <section id="page-labague" class="container col-10">
        <article>
            <div id="trait" class="trait"></div>
            <h2>La bague</h2>

            <video controls autoplay loop muted width="700">
                <source src="src/labague/motion-labague.mp4">
                <source src="src/labague/motion-labague.webm">
            </video>

            <div class="row cara-3">
                <div class="caracteristique col-3">
                    <div id="cara"></div>
                    <p>Pulsation</p>
                    <p>Grâce aux capteurs intégrés, la bague enregistre votre rythme cardiaque pendant toute votre activité sexuelle</p>
                </div>
                <div class="caracteristique col-3">
                    <div id="waterproof"></div>
                    <p>Waterproof</p>
                    <p>Vous pouvez prendre du plaisir n’importe où… Votre bague résiste à l’eau
                    </p>
                </div>
                <div class="caracteristique col-3">
                    <div id="autonomie"></div>
                    <p>Autonomie</p>
                    <p>N’ayez pas peur de la panne. Tenez jusqu'à 7 jours sans avoir besoin de recharger votre bague</p>
                </div>
                <div class="caracteristique col-3">
                    <div id="orgasme"></div>
                    <p>Orgasme</p>
                    <p>Grâce à sa technologie pointue, votre bague vous garantie l’orgasme</p>
                </div>
            </div>

        </article>


    </section>
    <section id="page-labague-custom" class="container col-10">
        <article class="col-10 clear">
            <div id="trait2" class="trait"></div>
            <h2>Personnalisez votre bague</h2>
        </article>
        <div class="row custom">
            <div class="bague-custom col-5">
                <img id="image_facebook" class="img-partager pulsate-fwd" src="src/custom/noir-spikes.png" alt="sutomisation-bague">

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
                            <a id="aluminium" class="select"></a>
                            <span>Aluminium</span>
                        </div>
                        <div class="column-couleur">
                            <a id="acier" class="select"></a>
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
                            <a id="spikes" class="select active-select-ornement"></a>
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
                    <form action="labague-confirmation.php" method="post">
                        <input type="text" value="<?php echo $_POST['choix'] ?>" name="choix" class="cache">
                        <input type="text" id="imagebague" value="src/custom/noir-spikes.png" name="image" class="cache">


                        <p>
                            <label for="taille">Taille</label>
                            <input id="taille" name="taille" placeholder="53" type="number" min="44" max="71">
                        </p>

                        <p>
                            <label for="gravure">Gravure</label>
                            <input placeholder="Votre texte" type="text" id="gravure" name="gravure">
                        </p>

                        <p>
                            <label for="fonctionnalite">Et vous, quelle fonctionnalité imagineriez-vous ?!</label>
                            <input placeholder="Facultatif" type="text" id="fonctionnalite" name="fonctionnalite">
                        </p>

                        <input type="submit" class="btn left" value="Suivant">
                    </form>


                </div>
            </div>

        </div>
    </section>
    <section id="page-labague-mode" class="container col-10">
        <article id="champ-mode">
            <p class="champ-mode-blanc">Quel mode de jeu est fait pour vous ?</p>
            <a href="q1.php" class="btn btn-test">Explorez-vous</a>

        </article>
    </section>
        <div class="push"></div>


</div>
<?php include("include/footerWhite.php") ?>


</body>
<script>
    var couleur;
    var ornement;

    $("#ornement .select").click(function() {
        $(".active-select-ornement").removeClass("active-select-ornement");
        $(this).addClass("active-select-ornement");

        ornement = $(this).attr('id');
        couleur = $("#couleur .active-select-couleur").attr('id');
        $.ajax({
            type : 'post',
            url : 'core/bague.php',
            data : {
                couleur:couleur,
                ornement:ornement
            }
        }).done(function(msg){
            $('#image_facebook').attr('src', msg);
            $('#imagebague').attr('value', msg);
        })
    });
    $("#couleur .select").click(function() {
        $(".active-select-couleur").removeClass("active-select-couleur");
        $(this).addClass("active-select-couleur");
        couleur = $(this).attr('id');
        ornement = $("#ornement .active-select-ornement").attr('id');

        $.ajax({
            type : 'post',
            url : 'core/bague.php',
            data : {
                couleur:couleur,
                ornement:ornement
            }
        }).done(function(msg){
            $('#image_facebook').attr('src', msg);
            $('#imagebague').attr('value', msg);
        })
    });
</script>
</html>