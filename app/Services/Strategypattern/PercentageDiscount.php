<?php

namespace App\Services\Strategypattern;

use App\Interfaces\StrategyPattern\DiscountStrategy;

class PercentageDiscount implements DiscountStrategy
{
    private $percentage;

    public function __construct($percentage)
    {
        $this->percentage = $percentage;
    }

    public function calculateDiscount($totalAmount)
    {
        return $totalAmount * ($this->percentage / 100);
    }
}
