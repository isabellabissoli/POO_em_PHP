<?php

require_once 'src/BD.php';
require_once 'src/interfaces/ICadastro.php';
require_once 'src/interfaces/INotificacao.php';
require_once 'src/interfaces/ILog.php';

require_once 'src/componentes/Log.php';
require_once 'src/componentes/Notificacao.php';


class UsuarioModel extends BD implements ICadastro,ILog,INotificacao{
    public function salvar(){}

    public function registrarLog(Log $log){}
    
    public function enviarNotificacao(Notificacao $notificacao){}

    
}