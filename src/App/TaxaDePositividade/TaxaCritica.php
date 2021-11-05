<?php
namespace App\TaxaDePositividade;

class TaxaCritica implements IStateTaxaDePositividade
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
        return "Critica";
    }

    public function minima() 
    {
        if ($this->taxa <= 20) {
            $this->context->setState($this->context->getTaxaMinima());
        }
    }

    public function baixa()
    {
        if ($this->taxa >=21 && $this->taxa <= 30) {
            $this->context->setState($this->context->getTaxaBaixa());
        }
    }

    public function moderada() 
    {
        if ($this->taxa >=31 && $this->taxa <= 40) {
            $this->context->setState($this->context->getTaxaModerada());
        }
    }

    public function alta()
    {
        if ($this->taxa >=41 && $this->taxa <= 50) {
            $this->context->setState($this->context->getTaxaAlta());
        }
    }

    public function muitoAlta()
    {
        if ($this->taxa >=51 && $this->taxa <= 60) {
            $this->context->setState($this->context->getTaxaMuitoAlta());
        }
    }

    public function critica()
    {
        if ($this->taxa >=61 && $this->taxa <= 70) {
            $this->context->setState($this->context->getTaxaCritica());
        }
    }

    public function muitoCritica()
    {
        if ($this->taxa > 70) {
            $this->context->setState($this->context->getTaxaMuitoCritica());
        }
    }
}