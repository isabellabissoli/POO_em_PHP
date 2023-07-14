<?php
require_once 'src/Email.php';
require_once 'src/IMensagemToken.php';

class Mensageiro {
    private $canal;

    function __construct(IMensagemToken $canal){
        $this->setCanal($canal);
    }

    public function getCanal(): IMensagemToken{
        return $this->canal;
    }

    public function setCanal(IMensagemToken $canal): void {
        $this->canal = $canal;
    }
    
    public function enviarToken(): void{
        $this->getCanal()->enviar();
        // $classe = ucfirst($this->getCanal());

        // $obj = new $classe; //impkementação = instancia
        // $obj->enviar();
    }
}