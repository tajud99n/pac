<?php 

require_once("vendor/autoload.php");

use proj\library\LibraryCataLogue;

// will be found under mylib/
use proj\library\inventory\Book;

// will be found under additional/
use proj\library\inventory\Ebook;

$catalogue = new LibraryCatalogue();
$catalogue->addBook(new Book());
$catalogue->addBook(new Ebook());