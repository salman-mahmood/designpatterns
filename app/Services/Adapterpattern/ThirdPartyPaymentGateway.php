<?php

namespace App\Services\Adapterpattern;

// The Adaptee is an existing class with a different interface that we want to adapt.
class ThirdPartyPaymentGateway
{
    public function sendPayment($paymentAmount)
    {
        // Send payment using a third-party API
        echo "Sending payment of $paymentAmount via third-party payment gateway.\n";
    }
}
