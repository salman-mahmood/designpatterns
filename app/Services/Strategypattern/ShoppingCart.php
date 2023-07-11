<?php

namespace App\Services\Strategypattern;

use App\Interfaces\StrategyPattern\DiscountStrategy;

class ShoppingCart
{
    private $discountStrategy;

    public function setDiscountStrategy(DiscountStrategy $discountStrategy)
    {
        $this->discountStrategy = $discountStrategy;
    }

    public function calculateTotal($totalAmount)
    {
        $discount = $this->discountStrategy->calculateDiscount($totalAmount);
        return $totalAmount - $discount;
    }
}
