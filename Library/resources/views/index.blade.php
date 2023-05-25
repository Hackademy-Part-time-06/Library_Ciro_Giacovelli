
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Libreria</title>
    @vite(['resources\css\app.css', 'resources\js\app.js'])

</head>


<body class="antialiased">
    <ul>
        @foreach ($books as $book)
        <li>{{$book['title']}} - {{$book['author']}}</li>
        @endforeach
    </ul>
 

</body>

</html>
