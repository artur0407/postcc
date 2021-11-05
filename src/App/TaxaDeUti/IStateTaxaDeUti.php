<?php
namespace App\TaxaDeUti;

interface IStateTaxaDeUti
{
    public function minima();
    public function baixa();
    public function moderada();
    public function alta();
    public function muitoAlta();
    public function critica();
}