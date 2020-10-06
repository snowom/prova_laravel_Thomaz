<nav class="navbar navbar-expand-md navbar-light bg-primary">
    <a class="navbar-brand" style="color: white">Inicio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
      <a class="nav-item nav-link" href="{{ route('listarTabeliao') }}" style="color: white">Tabelião</a>
        <a class="nav-item nav-link" href="{{ route('listarContrato') }}" style="color: white">Contrato</a>
        <a class="nav-item nav-link" href="{{ route('listarCertidao') }}" style="color: white">Certidao</a>
      </div>
    </div>
  </nav>