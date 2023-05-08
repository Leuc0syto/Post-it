<x-layout>

    <x-slot name="title">Post-it Inicio</x-slot>

    <div class="container-fluid bg-welcome d-flex flex-column justify-content-center">
        <div class="row justify-content-center">
            <div class="col-12 col-md-9 bg-h1 d-flex flex-column justify-content-center align-items-center shadow-lg">
                <h1 class="display-0 logo pb-4">Post-It</h1>
                <h2 class="">¡Aquí las ideas las pones tú!</h2>
                <button class="btn-footer py-2 mt-5 shadow">
                    <a href="{{route('notes.create')}}" class="text-reset text-decoration-none">Crea tu Nota!</a>
                </button>
            </div>
        </div>
    </div>

</x-layout>
