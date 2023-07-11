<?php

namespace App\Services\Decoratorpattern;

class SprinklesDecorator extends CupcakeDecorator
{
    public function getDescription(){
        return $this->cupcake->getDescription() . ', with sprinkles';
    }
}
