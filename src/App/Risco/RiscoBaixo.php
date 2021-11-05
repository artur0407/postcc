<?php
namespace App\Risco;

class RiscoBaixo implements IStrategy
{
    private $eixoMatriz = [
        "Minima Minima", 
        "Minima Baixa", 
        "Baixa Minima", 
        "Moderada Minima", 
        "Alta Minima"
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
            return "Baixo";
        }
    }
}