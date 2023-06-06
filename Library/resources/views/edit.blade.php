@vite(['resources\css\app.css', 'resources\js\app.js'])

<section class="py-5">
    <div class="container px-5">
        <div class=" rounded-3 py-5 px-4 px-md-5 mb-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="{{route('update' , ['book'=> $book->id])}}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" name="title" type="text" value="{{$book->name}}"
                                placeholder="Inserisci titolo libro">
                            <label for="name">Nuovo Titolo</label>
                            @error('name')
                            <span class="text-danger">
                                Titolo obbligatorio!
                            </span>
                            @enderror
                        </div>

                        <div class="form-floating mb-3">
                            <input class="form-control" id="author" name="author" type="text"
                                value="{{$book->author}}" placeholder="nome autore">
                            <label for="author">Nuovo Autore</label>
                            @error('author')
                            <span class="text-danger">
                                Autore obbligatorio!
                            </span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="pages" name="pages" type="text" value="{{$book->pages}}"
                                placeholder="Inserisci Numero pagine Libro">
                            <label for="pages">Numero pagine Libro</label>
                            @error('name')
                            <span class="text-danger">
                                Inserisci un valore numerico obbligatorio!
                            </span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" id="pages" name="years" type="text" value="{{$book->year}}"
                                placeholder="Inserisci Numero pagine Libro">
                            <label for="pages">Anno</label>
                            @error('name')
                            <span class="text-danger">
                                Inserisci un valore numerico obbligatorio!
                            </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="pages">Immagine del Libro</label>
                            <input class="form-control" id="image" name="image" type="file"
                                value="{{$book->image}}">
                        </div>

                        <div class="d-grid gap-3">
                            <button class="btn btn-dark btn-lg p-2" type="submit">Aggiorna</button>
                    </div>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</section>