
@vite(['resources\css\app.css', 'resources\js\app.js'])


    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6">
                    <img class="card-img-top mb-5 mb-md-0"  src="{{Storage::url($book->image)}}" alt="{{$book->name}}">
                </div>
                <div class="col-md-6">
                    <a>

                    <h1 class="display-5 fw-bolder">{{$book->name}}</h1>
                    <p>Autore: {{$book->author->surname}} </p>
                    <p>Numero Pagine: {{$book->pages}} </p>

                <a href="{{ route('index') }}" class="btn btn-dark"> Torna Indietro</a>
                </div>
            </div>
        </div>
    </section>
    