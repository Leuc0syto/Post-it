<x-layout>


    <x-slot class="title">Post It - Registrarse</x-slot>

    {{-- FORMULARIO --}}

    <div class="container-fluid my-5 py-5 px-4 bg-login">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-12 col-md-3 d-flex flex-column justify-content-center">
                <div class="mb-5 text-center">
                    <h1>Registrarse</h1>
                </div>
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-5 form-floating">
                        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="floatingInput"
                            placeholder="nombre" value="{{old('name')}}">
                        <label for="floatingInput">Nombre</label>
                    </div>

                    <div class="mb-5 form-floating">
                        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput"
                            placeholder="name@example.com" value="{{old('email')}}">
                        <label for="floatingInput">Correo electrónico</label>
                    </div>

                    <div class="mb-5 form-floating">
                        <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" value="{{old('password')}}">
                        <label for="floatingPassword">Contraseña</label>
                    </div>

                    <div class="mb-5 form-floating">
                        <input name="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="floatingPassword" placeholder="Password" value="{{old('password_confirmation')}}">
                        <label for="floatingPassword">Confirmar contraseña</label>
                    </div>


                    <div class="d-flex justify-content-center">
                        <button class="btn-footer py-2 px-2 shadow" type="submit">Regístrarse</button>
                    </div>

                    <div class="mt-4 text-center">
                        <p>
                            ¿Ya tienes una cuenta? <span><a href="{{route('login')}}">!Inicia sesión¡</a></span>
                        </p>
                    </div>

                </form>

            </div>
        </div>
    </div>

</x-layout>
