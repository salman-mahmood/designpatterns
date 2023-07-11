<?php

namespace App\Http\Controllers;

use App\Interfaces\StrategyPattern\DiscountStrategy;
use App\Services\Strategypattern\FixedAmountDiscount;
use App\Services\Strategypattern\PercentageDiscount;
use App\Services\Strategypattern\ShoppingCart;

class StrategyController extends Controller
{
    public function calculateTotal() {
    // Create an instance of the shopping cart
    $cart = new ShoppingCart();

    // Set the discount strategy Fixed Or Percentage
    $cart->setDiscountStrategy(new FixedAmountDiscount(10));
    // $cart->setDiscountStrategy(new PercentageDiscount(10));

    // Calculate the total amount after applying the discount
    $total = $cart->calculateTotal(100);

    echo "Total amount: " . $total; // Output: Total amount: 90
    }
}
