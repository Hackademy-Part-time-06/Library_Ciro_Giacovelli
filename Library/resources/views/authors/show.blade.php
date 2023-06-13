@vite(['resources\css\app.css', 'resources\js\app.js'])

<section class="py-5">
    <div class="container px-4 px-lg-5 my-5">
        <div class="row gx-4 gx-lg-5 align-items-center">

            <div class="col-md-6">

                <p>Nome Autore: {{$author->name}} </p>
                <p>Cognome Autore: {{$author->surname}} </p>
                <p>Età Autore: {{ isset($author->date) ? $author->date->format('d-m-Y') : ''}} </p>



                @forelse ($author->books as $book)
                <div class="col-md-6">
                    <img class="card-img-top mb-5 mb-md-0"
                        src="{{empty($book->image) ? Storage::url('image/default.jpg') : Storage::url($book->image)}}"
                        alt="...">
                </div>
                @empty

                @endforelse
            </div>
        </div>
    </div>
</section>