<?php

namespace App\Services\Iteratorpattern;

use App\Services\Iteratorpattern\CollectionIterator;

class Collection
{
    private $books = [];

    public function addBook($book)
    {
        $this->books[] = $book;
    }

    public function getBooks()
    {
        return $this->books;
    }

    public function count()
    {
        return count($this->books);
    }

    public function getIterator()
    {
        return new CollectionIterator($this);
    }
}
