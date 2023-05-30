<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
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

    public function create() {
        return view ('create');

    }

    public function save(BookRequest $request) {

$path_image='';

if ($request->hasFile('image') && $request->file('image')->isValid()) {
    $path_name = $request->file('image')->getClientOriginalName();
    $path_image = $request->file('image')->storeAs('public/images/cover', $path_name);

Book::create([
    'title' => $request->input('title'),
    'author' => $request->input('author'),
    'pages' => $request->input('pages'),
    'years' => $request->input('years'),
    'image' => $path_image,
    ]);

return redirect()->route('index')->with('success', 'Creazione avvenuta con successo!');

 
    }
/*
    public function show(Book $id) {
    
            $book = Book::find($id);
    
             if (is_null($book)) {
                 abort(404);
             }
    
            //$mybook = Book::findOrFail($book);
    
            //return view('show', ['book' => $book]);
          
        
    }
*///
}}

