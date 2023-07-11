<?php

namespace App\Services\Decoratorpattern;

use App\Interfaces\DecoratorPattern\Cupcake;

class PlainCupcake implements Cupcake{
    public function getDescription()
    {
        return 'Plain Cupcake';
    }
}
