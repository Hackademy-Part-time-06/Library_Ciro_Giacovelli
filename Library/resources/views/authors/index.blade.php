@vite(['resources\css\app.css', 'resources\js\app.js'])

<div class="container mt-5">

    @if (session('success'))
    <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
            <use xlink:href="#check-circle-fill" />
        </svg>
        <div>
            {{session('success')}}
        </div>
    </div>
    @endif
    <div class="align-middle gap-2 d-flex justify-content-between">
        <h3>Elenco Autori inseriti</h3>
        <a href="{{route('author.create')}}" class="btn btn-success " type="button">Crea Nuovo Autore</a>
    </div>
    <table class="table border mt-2">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Cognome</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($authors as $author)
            <tr>
                <th scope="row">{{$author['id']}}</th>
                <td>{{$author['name']}}</td>
                <td>{{$author['surname']}}</td>
                <td>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{route('author.show', ['author' => $author['id']])}}"
                            class="btn btn-primary me-md-2">Visualizza</a>
                        <a href="{{route('author.edit', ['author' => $author['id']])}}"
                            class="btn btn-warning me-md-2">Modifica</a>

                    </div>


                </td>
            </tr>
            @empty
            <tr colspan="4"> </tr>
            @endforelse
        </tbody>
    </table>
</div>