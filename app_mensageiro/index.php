<?php
require_once 'src/Mensageiro.php';
require_once 'src/Sms.php';
require_once 'src/Email.php';

//------ canal e-mail
$msg = new Mensageiro(new Email());
$msg->enviarToken();

echo'<br />';
//------ canal sms
$msg2 = new Mensageiro(new Sms());
$msg->enviarToken();

// //------ canal e-mail
// $msg = new Mensageiro();
// $msg->setCanal('email');
// $msg->enviarToken();

// echo'<br />';
// //------ canal sms
// $msg2 = new Sms();
// $msg->setCanal('sms');
// $msg->enviarToken();

