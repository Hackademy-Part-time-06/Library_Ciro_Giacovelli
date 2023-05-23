<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StorebooksRequest;
use App\Http\Requests\UpdatebooksRequest;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         {
        $books= Book::all();
        return view ('index', ['books' => $books]);
    }
    }


}
