<?php

namespace proj\library;

use proj\library\inventory\Book;

class LibraryCataLogue
{
    private $books = [];
    public function addBook(Book $book)
    {
        $this->books[] = $book;
    }
}
