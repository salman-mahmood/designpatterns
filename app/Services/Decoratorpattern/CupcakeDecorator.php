<?php

namespace App\Services\Decoratorpattern;

use App\Interfaces\DecoratorPattern\Cupcake;

abstract class CupcakeDecorator implements Cupcake
{
    protected $cupcake;

    public function __construct(Cupcake $cupcake)
    {
        $this->cupcake = $cupcake;
    }
    public function getDescription()
    {
        return $this->cupcake->getDescription();
    }
}
