<?php

require_once 'src/BD.php';
require_once 'src/interfaces/ICadastro.php';
require_once 'src/interfaces/INotificacao.php';

require_once 'src/componentes/Notificacao.php';




class LeadModel extends BD implements ICadastro,INotificacao{
    public function salvar(){}

    
    public function enviarNotificacao(Notificacao $notificacao){}

    
}