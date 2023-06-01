
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
    <ul>
        @forelse ($books as $book)
        <li>
        <a href="{{route('show', ['book' => $book['id']])}}">

        <p>{{$book['id']}} - {{$book['title']}} - {{$book['author']}}< </p>
            
        </a>
        </li>
        @empty

        Nessun Libro
            
        @endforelse

        
    </ul>
 

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
