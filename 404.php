<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Checkinfo</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon_infocheck.png">

    <!-- FONTS -->
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,900'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,300,400,400italic,500,700,700italic'>

    <!-- CSS -->
    <link rel='stylesheet' href='css/global.css'>
    <link rel='stylesheet' href='css/structure_cic.css'>
    <link rel='stylesheet' href='css/employment.css'>
    <link rel='stylesheet' href='css/custom_cic.css'>
    <link rel='stylesheet' href='css/custom.css'>
    <!--
        <link rel='stylesheet' id='style-static' href='css/be_style.css'>
    -->

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="plugins/rs-plugin/css/settings.css">
</head>

<body class="error404  color-custom style-default layout-full-width header-plain header-fw minimalist-header sticky-header sticky-white ab-hide subheader-both-center menuo-last menuo-right mm-vertical mobile-tb-hide mobile-mini-mr-ll" cz-shortcut-listen="true">
    <div id="Error_404">
        <div class="container">
            <div class="column one">
                <div class="error_pic">
                    <i class="icon-traffic-cone"></i>
                </div>
                <div class="error_desk">
                    <h2>Ooops... Erreur 404</h2>
                    <h4>Nous sommes désolés, mais la page que vous recherchez n'existe pas.</h4>
                    <p>
                        <span class="check">Veuillez vérifier l'adresse saisie et réessayer ou </span><a class="button button_filled" href="?page=accueil">Allez à la page d'accueil</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="../js/jquery-2.1.4.min.js"></script>

    <script src="../js/mfn.menu.js"></script>
    <script src="../js/jquery.plugins.js"></script>
    <script src="../js/jquery.jplayer.min.js"></script>
    <script src="../js/animations/animations.js"></script>
    <script src="../js/translate3d.js"></script>
    <script src="../js/scripts.js"></script>

    <script>
        jQuery(window).load(function() {
            var retina = window.devicePixelRatio > 1 ? true : false;
            if (retina) {
                var retinaEl = jQuery("#logo img.logo-main");
                var retinaLogoW = retinaEl.width();
                var retinaLogoH = retinaEl.height();
                retinaEl.attr("src", "images/retina-theme.png").width(retinaLogoW).height(retinaLogoH);
                var stickyEl = jQuery("#logo img.logo-sticky");
                var stickyLogoW = stickyEl.width();
                var stickyLogoH = stickyEl.height();
                stickyEl.attr("src", "images/retina-theme.png").width(stickyLogoW).height(stickyLogoH);
                var mobileEl = jQuery("#logo img.logo-mobile");
                var mobileLogoW = mobileEl.width();
                var mobileLogoH = mobileEl.height();
                mobileEl.attr("src", "images/retina-theme.png").width(mobileLogoW).height(mobileLogoH);
                var mobileStickyEl = jQuery("#logo img.logo-mobile-sticky");
                var mobileStickyLogoW = mobileStickyEl.width();
                var mobileStickyLogoH = mobileStickyEl.height();
                mobileStickyEl.attr("src", "images/retina-theme.png").width(mobileStickyLogoW).height(mobileStickyLogoH);
            }
        });
    </script>



</body>

</html>