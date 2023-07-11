<?php

namespace App\Http\Controllers;

use App\Interfaces\AdapterPattern\PaymentGateway;
use App\Services\Adapterpattern\Client;
use App\Services\Adapterpattern\ThirdPartyPaymentGateway;
use App\Services\Adapterpattern\ThirdPartyPaymentGatewayAdapter;

class AdapterController extends Controller
{
    public function AdaptPayment()
    {
        $thirdPartyGateway = new ThirdPartyPaymentGateway();
        $adapter = new ThirdPartyPaymentGatewayAdapter($thirdPartyGateway);
        $client = new Client($adapter);
        $client->makePayment(100);
    }
}
