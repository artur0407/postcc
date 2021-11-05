<?php
namespace App\Risco;

class RiscoMuitoAlto implements IStrategy
{
    public $eixoMatriz = [
        "Minima Muito Alta",
        "Minima Critica", 
        "Baixa Muito Alta", 
        "Baixa Critica", 
        "Moderada Muito Alta",
        "Moderada Critica",
        "Alta Alta",
        "Alta Muito Alta",
        "Alta Critica",
        "Muito Alta Alta",
        "Muito Alta Muito Alta",
        "Muito Alta Critica",
        "Critica Alta",
        "Muito Critica Alta"
    ];

    private $eixoInformado;

    public function __construct($eixoInformado)
    {
        $this->eixoInformado = $eixoInformado;
    }

    public function __toString()
    {

    }

    public function verificarRisco()
    {
        if (in_array($this->eixoInformado, $this->eixoMatriz)) {
            return "Muito Alto";
        }
    }
}