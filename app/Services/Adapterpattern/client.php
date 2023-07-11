<?php

namespace App\Services\Adapterpattern;

use App\Interfaces\AdapterPattern\PaymentGateway;

class Client
{
    private $paymentGateway;

    public function __construct(PaymentGateway $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function makePayment($amount)
    {
        $this->paymentGateway->pay($amount);
    }
}
