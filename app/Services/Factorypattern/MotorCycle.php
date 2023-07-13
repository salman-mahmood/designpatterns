<?php

namespace App\Services\Factorypattern;

use App\Interfaces\FactoryPattern\VehicleInterface;

class MotorCycle implements VehicleInterface{
    
    Public function Drive(){
        return "Drive a Motor Cycle";
    }
}
