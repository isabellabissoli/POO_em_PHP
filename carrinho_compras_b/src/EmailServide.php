<?php



Class EmailService{

    private $de;
    private $para;
    private $assunto;
    private $conteudo;

    function __construct(
        string $de = 'isabellabg244@gmail.com',
        string $para = '',
        string $assunto = '',
        string $conteudo = ''
    ){
        $this->de = $de;
        $this->para = $para;
        $this->assunto = $assunto;
        $this->conteudo = $conteudo;
    }

    public static function dispararEmail(){
        return "--- enviar e-mail...";
    }
    
}