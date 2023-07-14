<?php

require_once 'src\componentes\Notificacao.php';

interface INotificacao{
    public function enviarNotificacao(Notificacao $notificacao);


    
}