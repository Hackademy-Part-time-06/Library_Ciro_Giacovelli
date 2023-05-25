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
    "years" => "required|numeric",
     ]); 

Book::create([
    'title' => $request->input('title'),
    'author' => $request->input('author'),
    'pages' => $request->input('pages'),
    'years' => $request->input('years'),
    ]);

return redirect()->route('index')->with('success', 'Creazione avvenuta con successo!');

 
    }

    public function show(Book $book) {
    
            // $mybook = Book::find($book);
    
            // if (is_null($mybook)) {
            //     abort(404);
            // }
    
            //$mybook = Book::findOrFail($book);
    
            //return view('show', ['book' => $book]);
            return view('books.show', compact('book'));
        
    }

}
