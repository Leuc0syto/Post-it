<x-layout>


    <x-slot class="title">Post It - Inicia Sesión</x-slot>

    {{-- FORMULARIO --}}

    <div class="container-fluid my-5 py-5 px-4 bg-login">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-12 col-md-3 d-flex flex-column justify-content-center">
                <div class="mb-5 text-center">
                    <h1>Inicia Sesión</h1>
                </div>
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-5 form-floating">
                        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput"
                            placeholder="name@example.com" value="{{old('email')}}">
                        <label for="floatingInput">Correo electrónico</label>
                    </div>
                    <div class="mb-5 form-floating">
                        <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" value="{{old('password')}}">
                        <label for="floatingPassword">Contraseña</label>

                    </div>


                    <div class="d-flex justify-content-center">
                        <button class="btn-footer py-2 px-2 shadow" type="submit">Iniciar sesión</button>
                    </div>

                    <div class="mt-4 text-center">
                        <p>
                            ¿Aun no tienes cuenta? <span><a href="{{route('register')}}">!Registrate aqui¡</a></span>
                        </p>
                    </div>

                </form>

            </div>
        </div>
    </div>

</x-layout>
