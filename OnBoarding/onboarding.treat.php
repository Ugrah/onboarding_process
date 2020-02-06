<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(session_id() == '' || !isset($_SESSION)) {
    // session isn't started
    session_start();
}

if( isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strcasecmp($_SERVER['HTTP_X_REQUESTED_WITH'], 'xmlhttprequest') == 0) {

    // Get action request
    $action = $_POST['action'];

    if($action == 'getSummaryInfos') {

        $content = '<form id="step-form-4" action="" method="POST" enctype="multipart/form-data" autocomplete="off">
                        <input type="hidden" name="step" value="4">
                        <input type="hidden" name="cityID" value="'.$_SESSION['city']['id'].'">
                        <input type="hidden" name="regionID" value="'.$_SESSION['region']['id'].'">

                        <div class="credit__input">
                            <label for="summaryIce">ICE <sup><i class="icofont-star-alt-2"></i></sup></label>
                            <input class="input" id="summaryIce" name="summaryIce" type="text" placeholder="Numéro ICE" required maxlength="15" autocomplete="off" value="'.$_SESSION['ice'].'" readonly>
                            <i class=" input__load"></i>
                            <span id="summaryIceError" class="msg-info"></span>
                        </div>

                        <div class="both_input">
                            <div class="credit__input column one-third" style="margin-left: 0;">
                                <label for="summaryName">Nom <sup><i class="icofont-star-alt-2"></i></sup></label>
                                <input class="input" id="summaryName" name="summaryName" type="text" placeholder="Nom" required autocomplete="off" value="'.$_SESSION['name'].'" readonly>
                                <i class=" input__load"></i>
                                <span id="summaryNameError" class="msg-info"></span>
                            </div>
                            <div class="credit__input column one-third">
                                <label for="summaryFirstName">Prénom(s) <sup><i class="icofont-star-alt-2"></i></sup></label>
                                <input class="input" id="summaryFirstName" name="summaryFirstName" type="text" placeholder="Prénom(s)" required autocomplete="off" value="'.$_SESSION['firstName'].'" readonly>
                                <i class=" input__load"></i>
                                <span id="summaryFirstNameError" class="msg-info"></span>
                            </div>
                            <div class="credit__input column one-third">
                                <label for="summaryPhone">Téléphone mobile <sup><i class="icofont-star-alt-2"></i></sup></label>
                                <input class="input" id="summaryPhone" name="summaryPhone" type="text" placeholder="06XXXXXXXX" required autocomplete="off" value="'.$_SESSION['phoneSubscribe'].'" readonly>
                                <i class=" input__load"></i>
                                <span id="summaryPhoneError" class="msg-info"></span>
                            </div>
                        </div>

                        <div class="both_input">
                            <div class="credit__input column one-second" style="margin-left: 0;">
                                <label for="summaryAddress">Adresse <sup><i class="icofont-star-alt-2"></i></sup></label>
                                <input class="input" id="summaryAddress" name="summaryAddress" type="text" placeholder="Adresse" required autocomplete="off" value="'.$_SESSION['address'].'" readonly>
                                <i class=" input__load"></i>
                                <span id="summaryAddressError" class="msg-info"></span>
                            </div>
                            <div class="credit__input column one-second">
                                <label for="summaryEmail">Email <sup><i class="icofont-star-alt-2"></i></sup></label>
                                <input class="input" id="summaryEmail" name="summaryEmail" type="text" placeholder="Email" required autocomplete="off" value="'.$_SESSION['emailSubscribe'].'" readonly>
                                <i class=" input__load"></i>
                                <span id="summaryEmailError" class="msg-info"></span>
                            </div>
                        </div>

                        <div class="both_input">
                            <div class="credit__input column one-second">
                                <label for="summaryCity">Ville<sup><i class="icofont-star-alt-2"></i></sup></label>
                                <input class="input" id="summaryCity" name="summaryCity" type="text" placeholder="" required autocomplete="off" value="'.$_SESSION['city']['name'].'" readonly>
                                <i class=" input__load"></i>
                                <span id="summaryCityError" class="msg-info"></span>
                            </div>
                            <div class="credit__input column one-second">
                                <label for="summaryRegion">Region<sup><i class="icofont-star-alt-2"></i></sup></label>
                                <input class="input" id="summaryRegion" name="summaryRegion" type="text" placeholder="" required autocomplete="off" value="'.$_SESSION['region']['name'].'" readonly>
                                <i class=" input__load"></i>
                                <span id="summaryRegionError" class="msg-info"></span>
                            </div>
                        </div>

                        <p>Vous êtes : <span id="summaryCompanyStatus">'.$_SESSION['companyStatus'].'</span></p>
                        <br>
                        <p>Votre secteur d\'activité: <span id="summaryActivity">'.$_SESSION['sector']['name'].'</span></p>

                        <br><br>

                        <div class="column_attr clearfix align_center step-pause">
                            <a id="back-step" class="button button_left button_size_2 button_js trigger-previous-step" href="#">
                                <span class="button_icon"><i class="icon-left" style="color: white !important"></i></span>
                                <span class="button_label">Revenir</span>
                            </a>
                            <a id="validate-step" class="button button_right button_size_2 button_js kill_the_icon trigger-next-step" href="#">
                                <span class="button_icon"><i class="icon-right" style="color: white !important"></i></span>
                                <span class="button_label">Valider</span>
                            </a>
                        </div>
                    </form>';

        echo $content;
    }

    if($action == 'getTermsOfService') {
        $content = '<form id="step-form-5" action="" method="POST" enctype="multipart/form-data" autocomplete="off" data-stay-display="1">
                        <input type="hidden" name="step" value="5">
                        <input id="acceptedTermsOfService" type="hidden" name="accepted" value="0">

                        <div class="credit__input">
                            <label>Condition d\'utilisation du service</label>
                            <textarea id="termsOfService" name="termsOfService" rows="8" style="width: 100%" readonly>
                                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
                            </textarea>
                            <span id="termsOfServiceError" class="msg-info"></span>
                        </div>

                        <div class="column_attr clearfix align_center step-pause">
                            <a class="button button_left button_size_2 button_js trigger-next-step" href="#" onclick="setAccepted(\'0\')">
                                <span class="button_icon"><i class="icon-left" style="color: white !important"></i></span>
                                <span class="button_label">Refuser</span>
                            </a>
                            <a class="button button_right button_size_2 button_js kill_the_icon trigger-next-step" href="#" onclick="setAccepted(\'1\')">
                                <span class="button_icon"><i class="icon-right" style="color: white !important"></i></span>
                                <span class="button_label">Accepter</span>
                            </a>
                        </div>

                        <script>
                            function setAccepted(value) {
                                document.getElementById("acceptedTermsOfService").value = value;
                            }
                        </script>
                    </form>';

        echo $content;
    }

    if($action == 'getPaymentSummary') {

        $abonnement = '';

        foreach($_SESSION['subscriptionChoice'] as $subscriptionChoise) {
            $abonnement .= '<tr>
                                <td>'.$subscriptionChoise['id'].'</td>
                                <td>'.$subscriptionChoise['volume'].'</td>
                                <td>'.$subscriptionChoise['amount'].'</td>
                                <td>'.$subscriptionChoise['managementFees'].'</td>
                                <td>'.$subscriptionChoise['canal'].'</td>
                                <td>
                                    <i class="icon-pocket"></i>
                                </td>
                            </tr>';
        }

        $littleTable = '<table>
                            <thead>
                                <tr>
                                    <th colspan="2">Récapitulatif du paiement</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td align="left">Abonnement</td>
                                    <td>S</td>
                                </tr>
                                <tr>
                                    <td align="left">Montant HT</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td align="left">Frais de gestion</td>
                                    <td>250</td>
                                </tr>
                                <tr>
                                    <td align="left">Total HT</td>
                                    <td>250</td>
                                </tr>
                                <tr>
                                    <td align="left">TVA (20%)</td>
                                    <td>50</td>
                                </tr>
                                <tr>
                                    <td align="left">Montant total TTC</td>
                                    <td>300</td>
                                </tr>
                            </tbody>
                        </table>';

        $content = '<form id="step-form-7" action="" method="POST" enctype="multipart/form-data" autocomplete="off" data-stay-display="1">
                        <input type="hidden" name="step" value="7">

                        <div class="both__input">
                            <div>
                                <label>Nous vous remercions pour le choix d\'abonnement de la formule suivante :</label>
                                <table>
                                    <tr>
                                        <th>#</th>
                                        <th>Volume</th>
                                        <th>Montant HT</th>
                                        <th>Frais de gestion</th>
                                        <th>Canal</th>
                                        <th>Choix</th>
                                    </tr>
                                    '.$abonnement.'
                                </table>
                            </div>
                        </div>
                    </form>';

            $content .= $littleTable;

        echo $content;
    }

    if($action == 'getPayment') {
        $littleTable = '<table>
                            <thead>
                                <tr>
                                    <th colspan="2">Récapitulatif du paiement</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td align="left">Abonnement</td>
                                    <td>S</td>
                                </tr>
                                <tr>
                                    <td align="left">Montant HT</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td align="left">Frais de gestion</td>
                                    <td>250</td>
                                </tr>
                                <tr>
                                    <td align="left">Total HT</td>
                                    <td>250</td>
                                </tr>
                                <tr>
                                    <td align="left">TVA (20%)</td>
                                    <td>50</td>
                                </tr>
                                <tr>
                                    <td align="left">Montant total TTC</td>
                                    <td>300</td>
                                </tr>
                            </tbody>
                        </table>';
        
        $paymentOptions = '<div class="flex-container">
                                <div class="option-payment">
                                    <img src="OnBoarding/img/visa-mastercard-logo.png" />
                                </div>
                                <div class="option-payment">
                                    <img src="OnBoarding/img/fatourati_2.jpg" />
                                </div>
                            </div>';

        $content = '<form id="step-form-8" action="" method="POST" enctype="multipart/form-data" autocomplete="off" data-stay-display="1">
                        <input type="hidden" name="step" value="8">

                        <div>
                            '.$littleTable.'
                            <label>Merci de choisir le mode de paiement</label><br>
                            '.$paymentOptions.'
                        </div>
                    </form>';

        echo $content;
    }
}
