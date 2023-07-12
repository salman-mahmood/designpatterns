<?php

namespace App\Interfaces\IteratorPattern;

// The Iterator interface defines the methods that all iterators must implement.
interface IteratorInterface{
    public function hasNext();
    public function next();
}
