<div class="container-fluid">
    <footer class="pt-5 mt-5 px-5">
        <div class="row">
          <div class="col-6 col-md-2 mb-3">
            <h5>POST-IT</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="{{ route ('welcome') }}" class="nav-link p-0 text-muted">Inicio</a></li>
              <li class="nav-item mb-2"><a href="{{ route ('notes.show') }}" class="nav-link p-0 text-muted">Notas</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Acerca de</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Sobre Nosotros</a></li>
            </ul>
          </div>

          <div class="col-md-5 offset-md-1 mb-3">
            <form>
              <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                <label for="newsletter1" class="visually-hidden">Correo electrónico</label>
                <input id="newsletter1" type="text" class="form-control" placeholder="Correo electrónico">
                <button class="btn btn-footer px-3" type="button">Suscríbete</button>
              </div>
            </form>
          </div>
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
          <p>© 2023 Leudys Torres.</p>
          <ul class="list-unstyled d-flex">
            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
            <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
          </ul>
        </div>
      </footer>
</div>
