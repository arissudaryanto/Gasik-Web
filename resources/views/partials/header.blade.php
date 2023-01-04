<header class="main-header {{ (Route::is('index')) ? 'position-absolute' : '' }} w-100">
    <nav class="navbar navbar-expand-xl {{ (Route::is('index')) ? 'navbar-dark' : 'navbar-light' }}  sticky-header z-10">
      <div class="container d-flex align-items-center justify-content-lg-between position-relative">
        <a href="/" class="navbar-brand d-flex align-items-center mb-md-0 text-decoration-none">
          <img src="{{ asset('img/logo-white.png') }}" alt="logo" class="img-fluid logo-white" />
          <img src="{{ asset('img/logo-color.png') }}" alt="logo" class="img-fluid logo-color" />
        </a>
        <a class="navbar-toggler position-absolute right-0 border-0" href="#offcanvasWithBackdrop">
          <span class="far fa-bars" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop" data-bs-toggle="offcanvas" role="button"></span>
        </a>
        <div class="clearfix"></div>
        <div class="collapse navbar-collapse justify-content-center">
          <ul class="nav col-12 col-md-auto justify-content-center main-menu">
            <li>
                <a href="/" class="nav-link">Home</a>
              </li>
            <li>
              <a href="#services" class="nav-link">Fitur</a>
            </li>
            <li>
                <a href="#whyus" class="nav-link">Mengapa Kami</a>
              </li>
            <li>
              <a href="/pricing" class="nav-link">Harga</a>
            </li>
            <li>
                <a href="#contact" class="nav-link">Hubungi Kami</a>
            </li>
          </ul>
        </div>
        <div class="action-btns text-end me-5 me-lg-0 d-none d-md-block d-lg-block">
          <a href="login.html" class="btn btn-warning text-dark me-2">Masuk</a>
          <a href="request-demo.html" class="btn btn-primary">Daftar Sekarang</a>
        </div>
      </div>
    </nav>
  </header>