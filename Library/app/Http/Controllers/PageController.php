<?php

namespace App\Http\Controllers;
use App\Models\book;
use Illuminate\Http\Request;

class PageController extends Controller
{


    public function index()
    {
        {
            $books= Book::all();
            return view ('index', ['books' => $books]);
        }
    }
}
