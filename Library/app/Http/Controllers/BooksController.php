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
     * 
     * 
     */

     public function __construct()
     {
         $this->middleware('auth')->except('index');
     }

    public function index()
    {
         
        $books= Book::all();
            return view ('index', ['books' => $books]);
    }

    public function create() {
        return view ('create');

    }

    public function save(BookRequest $request) {

$path_image='';

if ($request->hasFile('image') && $request->file('image')->isValid()) {
    $path_name = $request->file('image')->getClientOriginalName();
    $path_image = $request->file('image')->storeAs('public/images', $path_name);

Book::create([
    'title' => $request->input('title'),
    'author' => $request->input('author'),
    'pages' => $request->input('pages'),
    'years' => $request->input('years'),
    'image' => $path_image,
    ]);

return redirect()->route('index')->with('success', 'Creazione avvenuta con successo!');

 
    }
    }
    public function show($id) {
    
            $book = Book::find($id);
    
             if (is_null($book)) {
                 abort(404);
             }
    

            //$mybook = Book::findOrFail($book);
        return view('show', ['book' => $book]);
          
        
    }

    public function edit(Book $book)
    {
        return view('edit', compact('book'));
    }

    public function update(BookRequest $request, Book $book)
    {
        $path_image= $book->image;
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $path_name = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('image')->storeAs('public/images', $path_name);


    }
    $book->update([

    'title' => $request->input('title'),
    'author' => $request->input('author'),
    'pages' => $request->input('pages'),
    'years' => $request->input('years'),
    'image' => $path_image,
    ]);

    return redirect()->route('index')->with('success', 'Modifica avvenuta con successo!');
}

    public function destroy(Book $book) {

        $book->delete();
        return redirect()->route('index')->with('success', 'Cancellazione avvenuta con successo!');

    }
  
}

