<?php
namespace App\TaxaDePositividade;

class TaxaAlta implements IStateTaxaDePositividade
{
    private $context;
    private $taxa;

    public function __construct(ContextTaxaDePositividade $contextNow, int $taxa)
    {
        $this->context = $contextNow;
        $this->taxa = $taxa;
    }

    public function __toString()
    {
        return "Alta";
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
        $this->verificarTaxa(20, 0, $this->context->getTaxaMinima());
    }

    public function baixa()
    {
        $this->verificarTaxa(21, 30, $this->context->getTaxaBaixa());
    }

    public function moderada() 
    {
        $this->verificarTaxa(31, 40, $this->context->getTaxaModerada());
    }

    public function alta()
    {
        $this->verificarTaxa(41, 50, $this->context->getTaxaAlta());
    }

    public function muitoAlta()
    {
        $this->verificarTaxa(51, 60, $this->context->getTaxaMuitoAlta());
    }

    public function critica()
    {
        $this->verificarTaxa(61, 70, $this->context->getTaxaCritica());
    }

    public function muitoCritica()
    {
        $this->verificarTaxa(0, 70, $this->context->getTaxaMuitoCritica());
    }
}