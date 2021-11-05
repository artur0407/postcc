<?php
namespace App\Risco;

class ContextStrategy
{
    private $strategy;
    
    public function setStrategy(IStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function buscarRisco()
    {
        return $this->strategy->verificarRisco();
    }
}