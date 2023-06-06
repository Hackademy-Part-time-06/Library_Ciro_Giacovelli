
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Libreria</title>
    @vite(['resources\css\app.css', 'resources\js\app.js'])
</head>

<body class="antialiased">
    <x-navbar />
        @forelse ($books as $book)
        <a href="{{route('show', ['book' => $book['id']])}}">
        <div class="card mb-3 mt-4 ms-4" style="max-width: 540px;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="{{Storage::url($book->image)}}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">{{$book['title']}}</h5>
                  <h5 class="card-title">{{$book['author']}}</h5>
                  <p class="card-text"></p>
                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="{{route('show' , ['book' => $book['id']])}}"
                        class="btn btn-primary me-md-2">Visualizza</a>
                        @auth
                    <a href="{{route('edit' , ['book' => $book['id']])}}"
                        class="btn btn-warning me-md-2">Modifica</a>
                      <form action="{{route('destroy' , ['book'=>$book['id']])}}" method="POST">
                          @method('DELETE')
                          @csrf
                          <button type="submit" class="btn btn-danger">Cancella Libro</button>
                      </form>
                        @endauth
                </div>
                </div>
              </div>
            </div>
          </div>
        </a>
        
        @empty

        Nessun Libro
            
        @endforelse

    @if (session('success'))
<div class="alert alert-success d-flex align-items-center" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
        <use xlink:href="#check-circle-fill" />
    </svg>
    <div>
        {{session('success')}}
    </div>
@endif
</body>
</html>
