<!DOCTYPE html>
<?php

$data_product = array(

        "noirdiament"=>"src/motiv-rings.png",
        "anthracitediament" =>"src/cursor-rock.png"
);
$curren_image = false;
if(isset($_GET['couleur']) && isset($_GET['ornement'])){
    $data_images = json_decode($data_product);
    $color = $_GET['couleur'];
    $ornement = $_GET['ornement'];
    $combine = $color.$ornement;
    $curren_image = $data_product[$combine];
}

?>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Pace Me - La bague</title>

    <meta id="meta-images" property="og:url"           content="http://preprod.paceme.fr/<?php echo  ($curren_image)?$curren_image:"src/motiv-rings.png" ?>" />
    <meta property="og:type"          content="service" />
    <meta property="og:title"         content="Pace Me" />
    <meta property="og:description"   content="Personnaliser votre bague de plaisir avec Pace Me" />
    <meta id="meta-image" property="og:image"         content="http://preprod.paceme.fr/<?php echo  ($curren_image)?$curren_image:"src/motiv-rings.png" ?>"/>

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
            <img id="image_facebook" class="img-partager" style="width: 100%" src="<?php echo ($curren_image)?$curren_image:"src/motiv-rings.png" ?>" alt="">

        </div>
        <div class="col-4">
            <div>
                <h5>Matière / Couleur</h5>
                <div class="couleur row">
                    <div class="column-couleur">
                        <a id="noir" class="select"></a>
                        <span>Noir</span>
                    </div>
                    <div class="column-couleur">
                        <a id="anthracite" data-image="src/cursor-rock.png" class="select"></a>
                        <span>Anthracite</span>
                    </div>
                    <div class="column-couleur">
                        <a id="inox" class="select active-select"></a>
                        <span>Inox</span>
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
                <div class="ornement row">
                    <div class="column-couleur">
                        <a id="diament" class="select"></a>
                        <span>Diament</span>
                    </div>
                    <div class="column-couleur">
                        <a id="crane" class="select"></a>
                        <span>Crâne</span>
                    </div>
                    <div class="column-couleur">
                        <a id="eclair" class="select active-select"></a>
                        <span>Éclair</span>
                    </div>
                    <div class="column-couleur">
                        <a id="cercle" class="select"></a>
                        <span>Cercle</span>
                    </div>
                    <div class="column-couleur">
                        <a id="pique" class="select"></a>
                        <span>Pique</span>
                    </div>
                </div>
            </div>
            <div>
                <form action="">
                    <p>
                        <label for="gravure">Gravure</label>
                        <input placeholder="Votre texte" type="text" id="gravure" name="gravure">
                    </p>

                    <p>
                        <label for="fonctionnalite">Et vous, quelle fonctionnalité imagineriez vous ?!</label>
                        <input placeholder="Facultatif" type="text" id="fonctionnalite" name="fonctionnalite">
                    </p>

                    <input type="submit">

                    <div class="fb-share-button" data-href="http://preprod.paceme.fr/labague.php" data-layout="button" data-size="large" data-action="share" data-show-faces="true" data-share="true" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Partager sur Facebook</a></div>
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
<footer class="footer">

    <div class="img-footer">
        <img src="src/labague-footer.svg">

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
<script>
    var data_product_j = '<?php echo json_encode(array('data'=>$data_product));?>';
    var data_product = JSON.parse(data_product_j);
    $(document).ready(function (){
        $(".fb-share-button").attr("data-href",document.location.href);
        <?php echo (isset($_GET['couleur']))?"$('html, body').animate({scrollTop: $('#anthracite').offset().top},2000);":""?>
    });
    var  displayed_image = $("#image_facebook");
    var  meta_image = $("#meta_image");
    var  meta_images = $("#meta_images");

    var ornement = "diament";
    $("#anthracite").click(function() {
        var couleur = "anthracite";
        var base_url = document.location.href.split("?");
        var url = base_url[0] + "?couleur=" + couleur + "&ornement=" + ornement;
        document.location = url;
    });
        /*
        var combin = couleur+ornement;
        $(".fb-share-button").attr("data-href",url);
        displayed_image.attr("src",data_product.data[""+combin]);
        var image_url =window.location.protocol+ '//'+window.location.host+'/'+data_product.data[""+combin];
        meta_images.attr("content",image_url);
        meta_image.attr("content",image_url);

    } );*/

</script>
</html>