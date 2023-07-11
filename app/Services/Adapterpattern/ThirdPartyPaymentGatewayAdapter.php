<?php

namespace App\Services\Adapterpattern;

use App\Interfaces\AdapterPattern\PaymentGateway;

// The Adapter implements the Target interface and internally uses the Adaptee to perform the required operations.
class ThirdPartyPaymentGatewayAdapter implements PaymentGateway
{
    private $thirdPartyGateway;

    public function __construct(ThirdPartyPaymentGateway $thirdPartyGateway)
    {
        $this->thirdPartyGateway = $thirdPartyGateway;
    }

    public function pay($amount)
    {
        // Convert the desired interface method call into the corresponding Adaptee method call.
        $this->thirdPartyGateway->sendPayment($amount);
    }
}
