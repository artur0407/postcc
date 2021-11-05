<?php
namespace App\TaxaDePositividade;

use App\TaxaDePositividade\{TaxaMinima, TaxaBaixa, TaxaModerada};
use App\TaxaDePositividade\{TaxaAlta, TaxaMuitoAlta, TaxaCritica};
use App\TaxaDePositividade\TaxaMuitoCritica;

class ContextTaxaDePositividade
{
    private $taxaMinima;
    private $taxaBaixa;
    private $taxaModerada;
    private $taxaAlta;
    private $taxaMuitoAlta;
    private $taxaCritica;
    private $taxaMuitoCritica;
    private $taxaAtual;

    public function __construct($taxa)
    {
        $this->taxaMinima = new TaxaMinima($this, $taxa);
        $this->taxaBaixa = new TaxaBaixa($this, $taxa);
        $this->taxaModerada = new TaxaModerada($this, $taxa);
        $this->taxaAlta = new TaxaAlta($this, $taxa);
        $this->taxaMuitoAlta = new TaxaMuitoAlta($this, $taxa);
        $this->taxaCritica = new TaxaCritica($this, $taxa);
        $this->taxaMuitoCritica = new TaxaMuitoCritica($this, $taxa);
        $this->taxaAtual = $this->taxaMinima;
    }

    public function setState(IStateTaxaDePositividade $state)
    {
        $this->taxaAtual = $state;
    }

    public function __toString()
    {
        return $this->getState();
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
    
    public function moverParaTaxaMuitoCritica()
    {
        $this->taxaAtual->muitoCritica();
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

    public function getTaxaMuitoCritica()
    {
        return $this->taxaMuitoCritica;
    }
}