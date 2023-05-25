<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StorebooksRequest;
use App\Http\Requests\UpdatebooksRequest;
use Illuminate\Http\Request;

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

    public function create() {
        return view ('create');

    }

    public function save(Request $request) {


   $request->validate([ 
    "title" => "required|string",
    "pages" => "required|numeric",
    "author" => "required",
    ]); 

Book::create([
    'title' => $request->input('name'),
    'author' => $request->input('author'),
    'pages' => $request->input('pages'),
    ]);

return redirect()->route('books.index')->with('success', 'Creazione avvenuta con successo!');
        
    }

    public function show() {
        
    }

}
