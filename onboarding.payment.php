<?php

    if(session_id() == '' || !isset($_SESSION)) {
        // session isn't started
        session_start();
    }

?>

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
    <title>Check Info</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon_infocheck.png">

    <!-- FONTS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,400italic,500,700,700italic">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="css/global.css">

    <link rel="stylesheet" href="css/structure_cic.css">
    <link rel="stylesheet" href="css/employment.css">
    <link rel="stylesheet" href="css/custom_cic.css">

    <!-- Revolution Slider -->
    <link rel="stylesheet" href="plugins/rs-plugin/css/settings.css">


    <link rel="stylesheet" href="OnBoarding/css/icofont.css">
    <link rel="stylesheet" href="OnBoarding/css/swiper.min.css">
    <link rel="stylesheet" href="OnBoarding/css/style1.css">

    <link rel="stylesheet" href="OnBoarding/css/style_2.css">

    <style type="text/css">
        span.msg-info {
            color: red;
            font-size: 0.8em;
            display: block;
        }
    </style>

</head>

<body class="color-custom style-default button-default layout-full-width if-zoom if-border-hide no-content-padding header-classic minimalist-header-no sticky-header sticky-tb-color ab-hide subheader-both-center menu-link-color menuo-no-borders menuo-right footer-copy-center mobile-tb-center mobile-side-slide mobile-mini-mr-ll tablet-sticky mobile-header-mini mobile-sticky be-reg-2075">
    
    <!-- Main Theme Wrapper -->
    <div id="Wrapper">
        <!-- Header Wrapper -->
        <div id="Header_wrapper" class="flv_header_portfolio">
            <!-- Header -->
            <header id="Header">
                
            </header>
            <!--Subheader area - only for certain pages -->
            <div id="Subheader">
                <div class="container">
                    <div class="column one">
                        <h1 class="title">Demande de paiement</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content -->
        <div id="Content">
            <div class="content_wrapper clearfix">
                <div class="sections_group">
                    <div class="entry-content">
                        <div class="section mcb-section" style="padding-top:0px; padding-bottom:0px; background-color:#f9faff">
                            <div class="section_wrapper mcb-section-inner">
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_divider">
                                            <hr class="no_line" style="margin: 0 auto 200px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="step-block-section" class="section mcb-section" style="padding-top:0px; padding-bottom:0px; background-color:#303945">
                            <div class="section_wrapper mcb-section-inner">
                                <div id="subscribeStep" class="wrap mcb-wrap one employment-shadow column-margin-20px valign-top clearfix" style="padding:60px 50px 40px; background-color:#fff; margin-top:-120px;">
                                    <div class="mcb-wrap-inner">
                                        <div class="items_group clearfix">
                                            <!-- Page Title-->
                                            <!-- One full width row-->
                                            <div class="column_attr clearfix align_center">
                                                <div class="logo">
                                                    <img src="OnBoarding/img/logo.png" alt="" style="max-height: 5em">
                                                </div>
                                            </div>

                                            <div class="column mcb-column one-second column_column">
												<div class="column_attr clearfix">
                                                    <table class="payment">
                                                        <thead >
                                                            <tr>
                                                                <th>Détail du paiement</th>
                                                                <th>Date</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="right">Mode de paiement</td>
                                                                <td>
                                                                    <img src="OnBoarding/img/600.jpg" height="42" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="right">Nom du porteur de la carte</td>
                                                                <td><input type="text" name="name" placeholder="Entrer le nom"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="right">Nom de la carte de paiement</td>
                                                                <td><input type="text" name="number" placeholder="Numéro de la carte"></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="right">Date d'expiration</td>
                                                                <td style="display: flex">
                                                                    <select name="month" style="max-width: 60px; margin-right: 0.5em">
                                                                        <option value="01">01</option>
                                                                        <option value="02">02</option>
                                                                        <option value="03">03</option>
                                                                        <option value="04">04</option>
                                                                        <option value="05">05</option>
                                                                        <option value="06">06</option>
                                                                        <option value="07">07</option>
                                                                        <option value="08">08</option>
                                                                        <option value="09">09</option>
                                                                        <option value="10">10</option>
                                                                        <option value="11">11</option>
                                                                        <option value="12">12</option>
                                                                    </select>
                                                                    <select name="year" style="max-width: 80px; margin-right: 0.5em">
                                                                        <option value="2030">2030</option>
                                                                        <option value="2029">2029</option>
                                                                        <option value="2028">2028</option>
                                                                        <option value="2027">2027</option>
                                                                        <option value="2026">2026</option>
                                                                        <option value="2025">2025</option>
                                                                        <option value="2024">2024</option>
                                                                        <option value="2023">2023</option>
                                                                        <option value="2022">2022</option>
                                                                        <option value="2021">2021</option>
                                                                        <option value="2020">2020</option>
                                                                    </select>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="right">Code de paiement</td>
                                                                <td><input type="text" name="code" placeholder="Code" style="max-width: 90px;"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
												</div>
                                            </div>
                                            <div class="column mcb-column one-second column_column">
												<div class="column_attr clearfix">
                                                    <table class="payment">
                                                        <thead >
                                                            <tr>
                                                                <th class="left" colspan="2">Detail de la commande</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="left">Identifiant</td>
                                                                <td class="left">9010367</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="left">Montant</td>
                                                                <td class="left">1440.00 MAD</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <table class="payment">
                                                        <thead >
                                                            <tr>
                                                                <th class="left" colspan="2">Detail du marchand</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="left">Nom du marchand</td>
                                                                <td class="left">CREDIT INFO CHECKS (60000000478)</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <table class="payment">
                                                        <thead >
                                                            <tr>
                                                                <th class="left" colspan="2">Informations du client</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="left">Nom du client</td>
                                                                <td class="left">John Taylor</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="left">Adresse</td>
                                                                <td class="left">Adresse du client</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="left">Tél</td>
                                                                <td class="left">06XXXXXXXX</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="left">E-mail</td>
                                                                <td class="left">something@gmail.com</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
												</div>
                                            </div>
                                            
                                            <div class="column_attr clearfix align_center">
                                                <a class="button  button_size_2 button_js" href="#">   
                                                    <span class="button_label">Valider</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="subscribeRapport" class="wrap mcb-wrap one employment-shadow column-margin-20px valign-top clearfix" style="padding:60px 50px 40px; background-color:#fff; margin-top:-120px; display: none">
                                    <div class="items_group clearfix">
                                        <div class="column one column_column">
                                            <h4>Félicitations</h4>
                                            <p>
                                                Votre abonnement est désormais actif.
                                                Vous recevrez par email : 
                                                <ul>
                                                    <li>Votre login et mot de passe pour la connexion à votre espace client</li>
                                                    <li>Votre login et mot de passe pour l'accès aux services de vérification de chèque</li>
                                                </ul>
                                            </p>

                                            <p>
                                                En cas de besoin d'un renseignement n'hésitez pas à nous contacter :
                                                <ul>
                                                    <li>A partir d'un mobile - 4444</li>
                                                    <li>A partir d'un fixe - 080 203 4444</li>
                                                </ul>
                                            </p>
                                        </div>

                                        <div class="column one column_column">
                                            <div class="column_attr align_center">
                                                <p>
                                                    Pour accèder à votre espace client merci de cliquer sur le lien suivant : 
                                                    <a class="" href="./"><span class="button_label">Cliquez-ici</span></a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wrap mcb-wrap one valign-top clearfix">
                                    <div class="mcb-wrap-inner">
                                        <div class="column mcb-column one column_divider">
                                            <hr class="no_line" style="margin: 0 auto 50px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <!-- JS -->

    <script src="js/jquery-2.1.4.min.js"></script>

    <script src="js/mfn.menu.js"></script>
    <script src="js/jquery.plugins.js"></script>
    <script src="js/jquery.jplayer.min.js"></script>
    <script src="js/animations/animations.js"></script>
    <script src="js/email.js"></script>
    <script src="js/scripts.js"></script>

    <script type="text/javascript">
        jQuery(function($) {
        });
    </script>

</body>

</html>