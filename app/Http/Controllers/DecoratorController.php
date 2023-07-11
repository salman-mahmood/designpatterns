<?php

namespace App\Http\Controllers;

use App\Services\Decoratorpattern\CherryDecorator;
use App\Services\Decoratorpattern\PlainCupcake;
use App\Services\Decoratorpattern\SprinklesDecorator;
use Illuminate\Http\Request;

class DecoratorController extends Controller
{
    public function Decorator() {
        $cupcake = new PlainCupcake();
        $cupcake = new SprinklesDecorator($cupcake);
        $cupcake = new CherryDecorator($cupcake);

        echo $cupcake->getDescription();
    }

}

