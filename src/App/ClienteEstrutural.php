<?php
namespace App;

class ClienteEstrutural 
{
    private $risco;
    private $taxa_positividade;
    private $taxa_uti;

    public $titulo = "MATRIZ DE RISCO PARA MONITORAMENTO ESTRATÉGICO DO DISTANCIAMENTO SOCIAL";
    public $base1  = "TAXA DE POSITIVIDADE";
    public $base2  = "TAXA DE OCUPAÇÃO GERAL DE UTI ADULTO";

    public function __construct($taxa_positividade, $taxa_uti)
    {
        $this->gerarTaxas($taxa_positividade, $taxa_uti);

        $resultado = array(
            "taxa_de_positividade"=>$this->getTaxaPositividade(),
            "taxa_de_uti"=> $this->getTaxaUti(),
            "risco"=> $this->getRisco()
        );

        echo json_encode($resultado);
    }

    private function gerarTaxas($taxa_positividade, $taxa_uti)
    {
        if ($taxa_positividade <= 20) {

            $estadoPositividade = "Mínima";

            if ($taxa_uti <= 50) {
                $estadoUti = "Mínima";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Baixo');
            }

            if ($taxa_uti >= 51 && $taxa_uti <= 60) {
                $estadoUti = "Baixa";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Baixo');
            }

            if ($taxa_uti >= 61 && $taxa_uti <= 70) {
                $estadoUti = "Moderada";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Moderado');
            }

            if ($taxa_uti >= 71 && $taxa_uti <= 80) {
                $estadoUti = "Alta";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Alto');
            }

            if ($taxa_uti >= 81 && $taxa_uti <= 90) {
                $estadoUti = "Muito Alta";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Muito Alto');
            }

            if ($taxa_uti > 90) {
                $estadoUti = "Crítica";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Muito Alto');
            }
        }

        if ($taxa_positividade >= 21 && $taxa_positividade <= 30) {

            $estadoPositividade = "Baixa";

            if ($taxa_uti <= 50) {
                $estadoUti = "Mínima";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Baixo');
            }

            if ($taxa_uti >= 51 && $taxa_uti <= 60) {
                $estadoUti = "Baixa";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Moderado');
            }

            if ($taxa_uti >= 61 && $taxa_uti <= 70) {
                $estadoUti = "Moderada";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Moderado');
            }

            if ($taxa_uti >= 71 && $taxa_uti <= 80) {
                $estadoUti = "Alta";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Alto');
            }

            if ($taxa_uti >= 81 && $taxa_uti <= 90) {
                $estadoUti = "Muito Alta";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Muito Alto');
            }

            if ($taxa_uti > 90) {
                $estadoUti = "Crítica";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Muito Alto');
            }
        }

        if ($taxa_positividade >= 31 && $taxa_positividade <= 40) {

            $estadoPositividade = "Moderada";

            if ($taxa_uti <= 50) {
                $estadoUti = "Mínima";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Baixo');
            }

            if ($taxa_uti >= 51 && $taxa_uti <= 60) {
                $estadoUti = "Baixa";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Moderado');
            }

            if ($taxa_uti >= 61 && $taxa_uti <= 70) {
                $estadoUti = "Moderada";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Alto');
            }

            if ($taxa_uti >= 71 && $taxa_uti <= 80) {
                $estadoUti = "Alta";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Alto');
            }

            if ($taxa_uti >= 81 && $taxa_uti <= 90) {
                $estadoUti = "Muito Alta";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Muito Alto');
            }

            if ($taxa_uti > 90) {
                $estadoUti = "Crítica";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Muito Alto');
            }
        }

        if ($taxa_positividade >= 41 && $taxa_positividade <= 50) {

            $estadoPositividade = "Alta";

            if ($taxa_uti <= 50) {
                $estadoUti = "Mínima";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Baixo');
            }

            if ($taxa_uti >= 51 && $taxa_uti <= 60) {
                $estadoUti = "Baixa";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Moderado');
            }

            if ($taxa_uti >= 61 && $taxa_uti <= 70) {
                $estadoUti = "Moderada";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Alto');
            }

            if ($taxa_uti >= 71 && $taxa_uti <= 80) {
                $estadoUti = "Alta";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Muito Alto');
            }

            if ($taxa_uti >= 81 && $taxa_uti <= 90) {
                $estadoUti = "Muito Alta";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Muito Alto');
            }

            if ($taxa_uti > 90) {
                $estadoUti = "Crítica";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Muito Alto');
            }
        }

        if ($taxa_positividade >= 51 && $taxa_positividade <= 60) {
            
            $estadoPositividade = "Muito Alta";

            if ($taxa_uti <= 50) {
                $estadoUti = "Mínima";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Moderado');
            }

            if ($taxa_uti >= 51 && $taxa_uti <= 60) {
                $estadoUti = "Baixa";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Moderado');
            }

            if ($taxa_uti >= 61 && $taxa_uti <= 70) {
                $estadoUti = "Moderada";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Alto');
            }

            if ($taxa_uti >= 71 && $taxa_uti <= 80) {
                $estadoUti = "Alta";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Muito Alto');
            }

            if ($taxa_uti >= 81 && $taxa_uti <= 90) {
                $estadoUti = "Muito Alta";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Muito Alto');
            }

            if ($taxa_uti > 90) {
                $estadoUti = "Crítica";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Muito Alto');
            }
        }

        if ($taxa_positividade >= 61 && $taxa_positividade <= 70) {

            $estadoPositividade = "Crítica";

            if ($taxa_uti <= 50) {
                $estadoUti = "Mínima";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Moderado');
            }

            if ($taxa_uti >= 51 && $taxa_uti <= 60) {
                $estadoUti = "Baixa";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Moderado');
            }

            if ($taxa_uti >= 61 && $taxa_uti <= 70) {
                $estadoUti = "Moderada";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Alto');
            }

            if ($taxa_uti >= 71 && $taxa_uti <= 80) {
                $estadoUti = "Alta";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Muito Alto');
            }

            if ($taxa_uti >= 81 && $taxa_uti <= 90) {
                $estadoUti = "Muito Alta";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Extremo');
            }

            if ($taxa_uti > 90) { 
                $estadoUti = "Crítica";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Extremo');
            }
        }

        if ($taxa_positividade > 70) {

            $estadoPositividade = "Muito Crítica";
            
            if ($taxa_uti <= 50) {
                $estadoUti = "Mínima";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Moderado');
            }

            if ($taxa_uti >= 51 && $taxa_uti <= 60) {
                $estadoUti = "Baixa";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Alto');
            }

            if ($taxa_uti >= 61 && $taxa_uti <= 70) {
                $estadoUti = "Moderada";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Alto');
            }

            if ($taxa_uti >= 71 && $taxa_uti <= 80) {
                $estadoUti = "Alta";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Muito Alto');
            }

            if ($taxa_uti >= 81 && $taxa_uti <= 90) {
                $estadoUti = "Muito Alta";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Extremo');
            }

            if ($taxa_uti > 90) {
                $estadoUti = "Crítica";
                $this->setTaxaPositividade($estadoPositividade);
                $this->setTaxaUti($estadoUti);
                $this->setRisco('Extremo');
            }
        }
    }

    private function setTaxaPositividade($taxa) 
    {
        $this->taxa_positividade = $taxa;
    }

    private function getTaxaPositividade() 
    {
        return $this->taxa_positividade;
    }

    private function setTaxaUti($taxa) 
    {
        $this->taxa_uti = $taxa;
    }

    private function getTaxaUti() 
    {
        return $this->taxa_uti;
    }

    private function setRisco($risco) 
    {
        $this->risco = $risco;
    }

    public function getRisco() 
    {
        return $this->risco;
    }
}