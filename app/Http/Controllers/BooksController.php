<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Position;
use App\ReletedBook;

class BooksController extends Controller
{
    private $book;

    public function __construct(Book $book, Position $position, ReletedBook $reletedBook)
    {

      $this->book = $book;
      $this->position = $position;
      $this->reletedBook = $reletedBook;

    }

    public function index()
    {
      return view('index');
    }

    public function create()
    {
      return view('create');
    }

}
