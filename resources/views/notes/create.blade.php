<x-layout>


    <x-slot class="title">Post It - Crear Nota</x-slot>

{{-- FORMULARIO --}}

    <div class="container my-5 py-5 px-4 bg-create shadow">
        <div class="row">
            <div class="col-12 col-md-6">
                <img src="{!! asset("images/create-notes.png")!!}" class="img-fluid" alt="crear nota">
            </div>
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center">
                <div class="mb-5 text-center text-white">
                    <h1>Crear tu Post It</h1>
                </div>
                <form method="POST" action="{{route('notes.store')}}">
                    @csrf
                    <div class="mb-5 px-4">
                        <label for="formTitle"class="form-label text-white">Titulo: </label>
                            @error('title')
                                <div class="alert alert-danger h6">El campo Titulo es requerido</div>
                            @enderror
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="formTitle" placeholder="Escribe tu titulo....." value="{{old('title')}}">
                    </div>
                    <div class="mb-5 px-4">
                        <label for="formBody" class="form-label text-white">Descripción: </label>
                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="formBody" rows="5">{{old('description')}}</textarea>
                            @error('description')
                                <div class="alert alert-danger h6">El campo Descripción es requerido</div>
                            @enderror
                    </div>
                    {{-- <div class="d-flex justify-content-center">
                        <button class="btn-footer py-2 px-2 shadow" type="submit">Crear Nota</button>
                    </div> --}}

                </form>

            </div>
        </div>
    </div>

</x-layout>
