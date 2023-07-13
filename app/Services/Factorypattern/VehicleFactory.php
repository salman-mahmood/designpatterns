<?php

namespace App\Services\Factorypattern;

use Exception;

class VehicleFactory
{
    public function createVehicle($type){
        switch($type){
            case 'car':
                return new Car();
                break;
            case 'motorcycle':
                return new MotorCycle();
                break;
            case 'bicycle':
                return new Bicycle();
                break;
            default:
                throw new Exception("Invalid Vehicle Type");
        }
    }
}
