<nav class="navbar navbar-expand-lg navbar-dark bg-primary p-2">
<div class="container">
  <div class="row"><img src="/img/smk.png" class="mr-3" width="11%"><h3 class="text-white" style="font-family:Moon;margin-top:36px;">SMK Negeri 4 Bandung</h3></div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <center>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link @yield('global')" href="{{ route('global') }}"><h6>Data Global</h6></a>
      <a class="nav-item nav-link @yield('indonesia')" href="{{ route('indonesia') }}"><h6>Data Indonesia</h6></a>
    </div>
  </div>
  </center> 
</div>
</nav>