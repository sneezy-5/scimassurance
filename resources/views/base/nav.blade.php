<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-0 pe-5">
    <a href="{{ route('/') }}" class="navbar-brand ps-5 me-0">
        <img src="{{ asset('styles/img/LOGO1.jpg') }}" alt="" class="img-fluid">
    </a>
    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('/') }}" class="nav-item nav-link{{ Request::is('/') ? ' active' : '' }}">Accueil</a>
            <a href="{{ route('quisommesnous') }}" class="nav-item nav-link{{ Request::is('quisommesnous') ? ' active' : '' }}">Qui sommes nous?</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Nos services</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{ route('multirisqpro') }}" class="dropdown-item{{ Request::is('multirisqpro') ? ' active' : '' }}">Mulltirisque Professionnel</a>
                    <a href="{{ route('multirisqhab') }}" class="dropdown-item{{ Request::is('multirisqhab') ? ' active' : '' }}">Mulltirisque Habitation</a>
                    <a href="{{ route('tousrisqchan') }}" class="dropdown-item{{ Request::is('tousrisqchan') ? ' active' : '' }}">Tous Risque Chantier</a>
                    <a href="{{ route('assurancetrans') }}" class="dropdown-item{{ Request::is('assurancetrans') ? ' active' : '' }}">Assurance Transport</a>
                    <a href="{{ route('assurancevoy') }}" class="dropdown-item{{ Request::is('assurancevoy') ? ' active' : '' }}">Assurance Voyage</a>
                    <a href="{{ route('assurancemal') }}" class="dropdown-item{{ Request::is('assurancemal') ? ' active' : '' }}">Assurance Maladie</a>
                    <a href="{{ route('assuranceauto') }}" class="dropdown-item{{ Request::is('assuranceauto') ? ' active' : '' }}">Assurance Automobile</a>
                </div>
            </div>
            <a href="{{ route('contact.index') }}" class="nav-item nav-link{{ Request::is('contact') ? ' active' : '' }}">Contactez-Nous</a>
        </div>
        <a href="{{ route('actualite') }}" class="btn btn-primary px-3 d-lg-block">Nos actualités</a>
    </div>
</nav>
<!-- Navbar End -->
