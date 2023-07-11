<?php

namespace App\Services\Strategypattern;

use App\Interfaces\StrategyPattern\DiscountStrategy;

class FixedAmountDiscount implements DiscountStrategy
{
    private $fixedAmount;

    public function __construct($fixedAmount)
    {
        $this->fixedAmount = $fixedAmount;
    }

    public function calculateDiscount($totalAmount)
    {
        return $this->fixedAmount;
    }
}
