<?php
namespace App\Risco;

class RiscoModerado implements IStrategy
{
    private $eixoMatriz = [
        "Minima Moderada", 
        "Baixa Baixa", 
        "Baixa Moderada", 
        "Moderada Baixa", 
        "Alta Baixa", 
        "Muito Alta Minima", 
        "Muito Alta Baixa",
        "Critica Minima", 
        "Critica Baixa",
        "Muito Critica Minima"
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
            return "Moderado";
        }
    }
}