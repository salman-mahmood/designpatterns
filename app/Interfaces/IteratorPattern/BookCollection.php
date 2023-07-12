<?php

namespace App\Interfaces\IteratorPattern;

use App\Interfaces\IteratorPattern\BookIterator;

// The Aggregate interface defines the methods to create an iterator.
interface BookCollection{
    public function createIterator(): BookIterator;
}
