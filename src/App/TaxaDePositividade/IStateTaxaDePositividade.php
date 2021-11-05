<?php
namespace App\TaxaDePositividade;

interface IStateTaxaDePositividade
{
    public function minima();
    public function baixa();
    public function moderada();
    public function alta();
    public function muitoAlta();
    public function critica();
    public function muitoCritica();
}