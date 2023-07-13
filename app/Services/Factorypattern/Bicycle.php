<?php

namespace App\Services\Factorypattern;

use App\Interfaces\FactoryPattern\VehicleInterface;

class Bicycle implements VehicleInterface{
    public function Drive(){
        return "Drive a Bicyle";
    }
}
