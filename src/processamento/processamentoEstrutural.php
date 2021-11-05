<?php

require_once '../../vendor/autoload.php';

use App\ClienteEstrutural;

$taxas = new ClienteEstrutural($_POST['taxa_de_positividade'], $_POST['taxa_de_uti']);