<?php

require_once 'src/poligonos/Retangulo.php';
require_once 'src/poligonos/Quadrado.php';
require_once 'src/Poligono.php';

$poligono = new Poligono();
$poligono->setForma(new Retangulo());
$poligono->getForma()->setAltura(5);
$poligono->getForma()->setLargura(10);

echo '<pres>';
print_r($poligono);
echo '</pres>';
echo '<h3>Área do retângulo: '.$poligono->getArea().'</h3>';

$poligono2 = new Poligono();
$poligono2->setForma(new Quadrado());
$poligono2->getForma()->setLargura(10);

echo '<pres>';
print_r($poligono);
echo '</pres>';
echo '<h3>Área do Quadrado: '.$poligono->getArea().'</h3>';

// $retangulo = new Retangulo();
// $retangulo->setAltura(5);
// $retangulo->setLargura(10);
// echo '<h3>Área do retângulo: '.$retangulo->getArea().'<h3>';

// $retangulo = new Quadrado();
// $retangulo->setAltura(5);
// echo '<h3>Área do retângulo: '.$retangulo->getArea().'<h3>';

// $retangulo = new Retangulo();
// $retangulo->setAltura(5);
// $retangulo->setLargura(10);
// echo '<h3>LSP - Área do retângulo: '.$retangulo->getArea().'<h3>';
