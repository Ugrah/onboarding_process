<?php

    if(isset( $_GET['page'] )) {
        $page = $_GET['page'];
    }else{
        $page = 'accueil';
    }
   $slug = null;
   if($page == 'accueil') {

        $slug =  'home.php';

   }elseif($page == 'verification-de-cheque') {

        $slug =  'verification.php';

   }elseif($page == 'opposition-sur-cheque') {

        $slug =  'opposition.php';

    }elseif( $page == 'articles-a-la-une' ) {

        $slug = 'news.php';

    }elseif( $page == 'foire-aux-questions' ) {

        $slug = 'faq.php';

    }elseif( $page == 'onboarding' ) {

        $slug = 'OnBoarding/onboarding.php';
    } elseif ( $page == 'payment' ) {
        $slug = 'OnBoarding/onboarding.payment.php';

    }elseif ( $page == 'condition-generale' ) {

        $slug = 'conditions-generales.php';
    }
    else{
        //$slug = '404 .php';
    }
    if( isset( $slug) ) require $slug;
    else require $page.'.php';
    

?>