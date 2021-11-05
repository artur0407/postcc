<?php
namespace App\TaxaDeUti;

use App\TaxaDeUti\{TaxaMinima, TaxaBaixa, TaxaModerada};
use App\TaxaDeUti\{TaxaAlta, TaxaMuitoAlta, TaxaCritica};

class ContextTaxaDeUti
{
    private $taxaMinima;
    private $taxaBaixa;
    private $taxaModerada;
    private $taxaAlta;
    private $taxaMuitoAlta;
    private $taxaCritica;
    private $taxaAtual;
    
    public function __construct($taxa)
    {
        $this->taxaMinima = new TaxaMinima($this, $taxa);
        $this->taxaBaixa = new TaxaBaixa($this, $taxa);
        $this->taxaModerada = new TaxaModerada($this, $taxa);
        $this->taxaAlta = new TaxaAlta($this, $taxa);
        $this->taxaMuitoAlta = new TaxaMuitoAlta($this, $taxa);
        $this->taxaCritica = new TaxaCritica($this, $taxa);
        $this->taxaAtual = $this->taxaMinima;
    }

    public function __toString()
    {
        return $this->getState();
    }
    
    public function setState(IStateTaxaDeUti $state)
    {
        $this->taxaAtual = $state;
    }

    public function getState()
    {
        return $this->taxaAtual;
    }

    public function moverParaTaxaMinima()
    {
        $this->taxaAtual->minima();
    }

    public function moverParaTaxaBaixa()
    {
        $this->taxaAtual->baixa();
    }

    public function moverParaTaxaModerada()
    {
        $this->taxaAtual->moderada();
    }
    
    public function moverParaTaxaAlta()
    {
        $this->taxaAtual->alta();
    }

    public function moverParaTaxaMuitoAlta()
    {
        $this->taxaAtual->muitoAlta();
    }

    public function moverParaTaxaCritica()
    {
        $this->taxaAtual->critica();
    }

    public function getTaxaMinima()
    {
        return $this->taxaMinima;
    }

    public function getTaxaBaixa()
    {
        return $this->taxaBaixa;
    }

    public function getTaxaModerada()
    {
        return $this->taxaModerada;
    }

    public function getTaxaAlta()
    {
        return $this->taxaAlta;
    }

    public function getTaxaMuitoAlta()
    {
        return $this->taxaMuitoAlta;
    }

    public function getTaxaCritica()
    {
        return $this->taxaCritica;
    }
}