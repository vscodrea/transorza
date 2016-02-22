<?php

//$recipients = 'transorza@yahoo.com';
$recipients = 'vscodrea@gmail.com';

//$recipients = '#';
$template = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head> 
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <title>Mesaj nou</title> </head>
	<body>';
$template .= '<b><h1><span style="text-align: center;">Ati primit un mesaj din formularul de contact de pe transorza.ro</span></h1></b>';
$template .= '<h2>Expeditor</h2>';
$template .= '<br />Nume: {name}';
$template .= '<br />Telefon: {phone}';
$template .= '<br />Email: {email}';
$template .= '<br>';
$template .= '<h2>Mesaj</h2>';
$template .= '<i><pre>{message}</pre></i>';

$template .= '</body></html>';

 if ($_POST['borcan'] != '') {
        die('MF003');
 }


try {
    require './phpmailer/PHPMailerAutoload.php';

    preg_match_all("/([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)/", $recipients, $addresses, PREG_OFFSET_CAPTURE);

    if (!count($addresses[0])) {
        die('MF001');
    }

    if (preg_match('/^(127\.|192\.168\.)/', $_SERVER['REMOTE_ADDR'])) {
		die('MF002');
    }

    if (!isset($_POST['form-type'])) {
        die('MF004');
    }

    if (!isset($_POST['email'])) {
        die('MF003');
    }

    foreach ($_POST as $key => $value) {
		$template = str_replace('{'.$key.'}', $value, $template);
    }

    $mail = new PHPMailer();
    $mail->From = $_SERVER['SERVER_ADDR'];
    $mail->FromName = $_SERVER['SERVER_NAME'];

    foreach ($addresses[0] as $key => $value) {
        $mail->addAddress($value[0]);
    }

    $mail->CharSet = 'utf-8';
    $mail->Subject = 'Ati primit un mesaj nou de pe transorza.ro';
    $mail->MsgHTML($template);
	$mail->send();
	
    die('MF000');
} catch (phpmailerException $e) {
    die('MF254');
} catch (Exception $e) {
    die('MF255');
	
}

?>