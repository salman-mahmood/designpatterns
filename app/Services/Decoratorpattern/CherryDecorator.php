<?php

namespace App\Services\Decoratorpattern;

class CherryDecorator extends CupcakeDecorator
{
    public function getDescription()
    {
        return $this->cupcake->getDescription() . ', with a cherry on top';
    }
}
