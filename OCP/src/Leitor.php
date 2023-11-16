<?php

namespace SRC;

use SRC\Arquivo;

class Leitor{
    private $arquivo;
    private $diretorio;

    public function getDiretorio(){
        return $this->diretorio;
    }

    public function getArquivo(){
        return $this->arquivo;
    }

    public function setDiretorio(string $diretorio){
        $this -> diretorio = $diretorio;
    }

    public function setArquivo(string $arquivo){
         $this -> arquivo = $arquivo;
    }

    public function lerArquivo(){
        $caminho = $this -> getDiretorio()."/".$this->getArquivo();


        $arquivo = new Arquivo();
        
        $extensao = explode(".",$this->getArquivo());

        if($extensao[1] == "csv"){
            $arquivo->lerArquivoCSV($caminho);
        }else if($extensao[1] == "txt"){
            $arquivo->lerArquivoTXT($caminho);
        }
        
        
        echo "<pre>";
        print_r($arquivo->getDados());
        echo "</pre>";
        
    }

}
