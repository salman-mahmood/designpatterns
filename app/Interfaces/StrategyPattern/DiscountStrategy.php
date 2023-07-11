<?php

namespace App\Interfaces\StrategyPattern;

interface DiscountStrategy
{
    public function calculateDiscount($totalAmount);
}
