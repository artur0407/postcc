<?php
namespace App\Risco;

class RiscoExtremo implements IStrategy
{
    private $eixoMatriz = [
        "Critica Muito Alta", 
        "Critica Critica", 
        "Muito Critica Muito Alta", 
        "Muito Critica Critica"
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
            return "Extremo";
        }
    }
}