<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;

class AuthorController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $authors= Author::all();
        return view ('authors.index', ['authors' => $authors]);
    }

   
    public function create()
    {
        return view('authors.create');
    }

   
    public function store(StoreAuthorRequest $request)
    {
        Author::create([
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'birthday' => $request->birthday,
        ]);

        return redirect()->route('author.index')->with('success', 'Creazione avvenuta con successo!');
    }


    public function show(Author $author)
    {
        return view('authors.show', compact('author'));
    }


    public function edit(Author $author)
    {
        return view('authors.edit', compact('author'));

    }


    public function update(UpdateAuthorRequest $request, Author $author)
    {
        $author->update([
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'birthday' => $request->birthday,
        ]);

        return redirect()->route('author.index')->with('success', 'Modifica avvenuta con successo!');
    }

    public function destroy(Author $author)
    {
        $author->delete();
        return redirect()->route('author.index')->with('success', 'Cancellazione avvenuta con successo!');
    }
}
