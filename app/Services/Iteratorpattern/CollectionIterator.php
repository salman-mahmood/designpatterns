<?php

namespace App\Services\Iteratorpattern;

use App\Interfaces\IteratorPattern\IteratorInterface;

// The Aggregate interface defines the methods to create an iterator.
class CollectionIterator implements IteratorInterface
{
    private $collection;
    private $position;

    public function __construct(Collection $collection) {
        $this->collection = $collection;
        $this->position = 0;
    }

    public function HasNext(){
        return $this->position < $this->collection->count();
    }
    public function Next(){
        $book = $this->collection->getBooks($this->position);
        $this->position++;
        return $book;
    }
}
