<?php

require_once 'src\dao\ContratoModel.php';
require_once 'src\dao\LeadModel.php';
require_once 'src\dao\UsuarioModel.php';

$contratoModel = new ContratoModel();
print_r($contratoModel);
echo '<br>';

$leadModel = new LeadModel();
print_r($leadModel);
echo '<br>';

$usuarioModel = new UsuarioModel();
print_r($usuarioModel);
echo '<br>';


