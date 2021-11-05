<?php
namespace App;

use App\TaxaDePositividade\ContextTaxaDePositividade;
use App\TaxaDeUti\ContextTaxaDeUti;
use App\Risco\ContextStrategy;
use App\Risco\{RiscoBaixo, RiscoModerado, RiscoAlto, RiscoMuitoAlto, RiscoExtremo};

class ClientePadroes
{
    private $numeroTaxaDePositividade;
    private $numeroTaxaDeUti;
    private $resultadoDoCruzamentoDasTaxas;

    public function __construct($numeroTaxaPositividade, $numeroTaxaUTI)
    {
        $taxa_de_positividade = strval($this->executarTaxaDePositividade($numeroTaxaPositividade));
        $taxa_de_uti = strval($this->executarTaxaDeUti($numeroTaxaUTI));
        $risco =  $this->executarRisco($taxa_de_positividade . " ".  $taxa_de_uti);

        $resultado = array(
            "taxa_de_positividade"=>$taxa_de_positividade,
            "taxa_de_uti"=>$taxa_de_uti,
            "risco"=>$risco
        );
        
        echo json_encode($resultado);
    }

    private function executarTaxaDePositividade($numeroTaxaDePositividade)
    {
        $this->numeroTaxaDePositividade = $numeroTaxaDePositividade;

        $contextTaxaPositividade = new ContextTaxaDePositividade($numeroTaxaDePositividade);
        $contextTaxaPositividade->moverParaTaxaMinima();
        $contextTaxaPositividade->moverParaTaxaBaixa();
        $contextTaxaPositividade->moverParaTaxaModerada();
        $contextTaxaPositividade->moverParaTaxaAlta();
        $contextTaxaPositividade->moverParaTaxaMuitoAlta();
        $contextTaxaPositividade->moverParaTaxaCritica();
        $contextTaxaPositividade->moverParaTaxaMuitoCritica();

        return $contextTaxaPositividade->getState();
    }

    private function executarTaxaDeUti($numeroTaxaDeUti)
    {
        $this->numeroTaxaDeUti = $numeroTaxaDeUti;

        $contextTaxaUTI = new ContextTaxaDeUti($numeroTaxaDeUti);
        $contextTaxaUTI->moverParaTaxaMinima();
        $contextTaxaUTI->moverParaTaxaBaixa();
        $contextTaxaUTI->moverParaTaxaModerada();
        $contextTaxaUTI->moverParaTaxaAlta();
        $contextTaxaUTI->moverParaTaxaMuitoAlta();
        $contextTaxaUTI->moverParaTaxaCritica();

        return $contextTaxaUTI->getState();
    }

    private function executarRisco($eixoTaxasRegistradas)
    {
        $context = new ContextStrategy();
        $context->setStrategy(new RiscoBaixo($eixoTaxasRegistradas));
        $risco = $context->buscarRisco();
        $context->setStrategy(new RiscoModerado($eixoTaxasRegistradas));
        $risco .= $context->buscarRisco();
        $context->setStrategy(new RiscoAlto($eixoTaxasRegistradas));
        $risco .= $context->buscarRisco();
        $context->setStrategy(new RiscoMuitoAlto($eixoTaxasRegistradas));
        $risco .= $context->buscarRisco();
        $context->setStrategy(new RiscoExtremo($eixoTaxasRegistradas));
        $risco .= $context->buscarRisco();

        return $risco;
    }
}