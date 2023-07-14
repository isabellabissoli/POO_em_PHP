<?php
require_once 'src/IMensagemToken.php';

class Email implements IMensagemToken{
    public function enviar():void{
        echo 'Email: Seu token é 23423442';
    }
}