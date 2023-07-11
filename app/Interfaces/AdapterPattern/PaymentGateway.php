<?php

namespace App\Interfaces\AdapterPattern;

interface PaymentGateway
{
    public function pay($amount);
}
