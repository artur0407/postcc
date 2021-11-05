<?php
namespace App\TaxaDeUti;

class TaxaMuitoAlta implements IStateTaxaDeUti
{
    private $context;
    private $taxa;

    public function __construct(ContextTaxaDeUti $contextNow, $taxa)
    {
        $this->context = $contextNow;
        $this->taxa = $taxa;
    }
    
    public function __toString()
    {
        return "Muito Alta";
    }

    public function verificarTaxa($taxa1, $taxa2, $estado)
    {
        if ($taxa1 > 0 && $taxa2 > 0) {
            if ($this->taxa >= $taxa1 && $this->taxa <= $taxa2) {
                $this->context->setState($estado);
            }
        } else {
            if ($taxa1 > 0 && $taxa2 == 0) { 
                if ($this->taxa <= $taxa1) {
                    $this->context->setState($estado);
                }
            } else if ($taxa1 == 0 && $taxa2 > 0) { 
                if ($this->taxa > $taxa2) {
                    $this->context->setState($estado);
                }
            }
        }
    }

    public function minima() 
    {
        $this->verificarTaxa(50, 0, $this->context->getTaxaMinima());
    }

    public function baixa()
    {
        $this->verificarTaxa(51, 60, $this->context->getTaxaBaixa());
    }

    public function moderada() 
    {
        $this->verificarTaxa(61, 70, $this->context->getTaxaModerada());
    }

    public function alta()
    {
        $this->verificarTaxa(71, 80, $this->context->getTaxaAlta());
    }

    public function muitoAlta()
    {
        $this->verificarTaxa(81, 90, $this->context->getTaxaMuitoAlta());
    }

    public function critica()
    {
        $this->verificarTaxa(0, 90, $this->context->getTaxaCritica());
    }
}