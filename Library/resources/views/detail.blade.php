<x-main>
    <body class="antialiased">
    <ul>
        @foreach ($books as $book)
        <li>{{$book['name']}} - {{$book['author']}}</li>
        @endforeach
    </ul>
</x-main>