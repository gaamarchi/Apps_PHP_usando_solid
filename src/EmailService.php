<?php

namespace App;

class EmailService{
    //atroibutos
    private $de;
    private $para;
    private $assunto;
    private $conteudo;

    //metodo

    public function __construct(
        string $de = "contato@site.com.br",
        string $para = "",
        string $assunto = "",
        string $conteudo = ""
    ){
        $this->de = "";
        $this->para = "";
        $this->assunto = "";
        $this->conteudo = "";
    }

    public static function enviarEmail(){
        return "--- email enviado ---";
    }
}
