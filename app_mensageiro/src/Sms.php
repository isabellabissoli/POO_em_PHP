<?php

require_once 'src/IMensagemToken.php';

class Sms implements IMensagemToken{
    public function enviar():void{
        echo 'Email: Seu token é 3434-3434';
    }
}