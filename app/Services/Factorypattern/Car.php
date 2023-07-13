<?php

namespace App\Services\Factorypattern;

use App\Interfaces\FactoryPattern\VehicleInterface;

class Car implements VehicleInterface{
    
    public function Drive(){
        return "Drive a car...!";
    }
}
