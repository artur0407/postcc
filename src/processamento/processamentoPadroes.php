<?php

require_once '../../vendor/autoload.php';

use App\ClientePadroes;

$cliente = new ClientePadroes($_POST['taxa_de_positividade'], $_POST['taxa_de_uti']);