<?php
namespace App\Risco;

class RiscoAlto implements IStrategy
{
    private $eixoMatriz = [
        "Minima Alta", 
        "Baixa Alta", 
        "Moderada Alta", 
        "Moderada Moderada", 
        "Alta Moderada",
        "Muito Alta Moderada",
        "Critica Moderada",
        "Muito Critica Moderada",
        "Muito Critica Baixa"
    ];

    private $eixoInformado;

    public function __construct($eixoInformado)
    {
        $this->eixoInformado = $eixoInformado;
    }
    
    public function verificarRisco()
    {
        if (in_array($this->eixoInformado, $this->eixoMatriz)) {
            return "Alto";
        }
    }
}