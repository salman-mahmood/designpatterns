<?php

namespace App\Http\Controllers;

use App\Services\Factorypattern\VehicleFactory;

class FactoryController extends Controller
{
    public function FactoryPattern(){
        $vehiclefactory = new VehicleFactory();
        $type = 'car';
        // $type = 'motorcycle';
        // $type = 'bicycle';
        $vehicle = $vehiclefactory->createVehicle($type);
        return $vehicle->Drive();
    }
}
