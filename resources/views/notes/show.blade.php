<x-layout>

    <x-slot class="title">Post It - Notas</x-slot>

    <div class="container my-5 py-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-2">Los Post It</h1>
            </div>
            @foreach ($notes as $note )

            <div class="col-12 col-md-4 my-4 d-flex justify-content-center">
                <div class="card card-postit shadow">
                    <div class="card-body ps-3">
                        <h5 class="card-title h2">{{$note->title}}</h5>
                        <p class="card-text logo  pt-3">{{$note->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <form action="{{route(('notes.destroy'))}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Borrar</button>
            </form> --}}

        </div>
    </div>


</x-layout>
