@vite(['resources\css\app.css', 'resources\js\app.js'])

    <body class="antialiased">
    <ul>
        @foreach ($books as $book)
        <li>{{$book['name']}} - {{$book['author_id']}}</li>
        @endforeach
    </ul>
