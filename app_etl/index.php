<?php

require_once 'src/Leitor.php';

//------------------------------------------------TXT
$leitorTXT= new Leitor();
$leitorTXT->setDiretorio(__DIR__.'/arquivo');
//$leitor->setArquivo('dados.csv');
$leitorTXT->setArquivo('dados.txt');

$arr_txt = $leitorTXT->lerArquivo();

//------------------------------------------------CSV
$leitorCSV = new Leitor();
$leitorCSV->setDiretorio(__DIR__.'/arquivo');
$leitorCSV->setArquivo('dados.csv');

$arr_csv = $leitorCSV->lerArquivo();


//---------------------------------------------Merge entre TXT e CSV
echo '<pres>';
print_r(array_merge($arr_txt,$arr_csv));
echo '</pres>';
