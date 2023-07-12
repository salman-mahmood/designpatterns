<?php

namespace App\Http\Controllers;

use App\Services\Iteratorpattern\Collection;
use App\Services\Iteratorpattern\CollectionIterator;

class IteratorController extends Controller
{
    public function Iterator(){
        // Usage:
        $Collection = new Collection();
        $Collection->addBook("Harry Potter");
        $Collection->addBook("The Hobbit2");
        $Collection->addBook("Harry Potter2");
        $Collection->addBook("The Hobbit");
        $Collection->addBook("Alice in Wonderland");
        $Collection->addBook("Harry Potter3");
        $Collection->addBook("The Hobbit3");


        $iterator = new CollectionIterator($Collection);
        while ($iterator->HasNext()) {
            $book = $iterator->Next();
        }
        dd($book);
        return $book;

    }
}
