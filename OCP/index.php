<?php

require __DIR__.'/vendor/autoload.php';

use SRC\Leitor;
//----------- leitor TXT
$leitorTXT = new leitor();
$leitorTXT-> setDiretorio(__DIR__.'/arquivos');
$leitorTXT-> setArquivo('dados.txt');
$leitorTXT->lerArquivo();

//------------leitor  CSV
$leitorCSV = new leitor();
$leitorCSV-> setDiretorio(__DIR__.'/arquivos');
$leitorCSV-> setArquivo('dados.csv');
$leitorCSV->lerArquivo();

