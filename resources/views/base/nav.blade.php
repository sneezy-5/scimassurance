
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-0 pe-5">
        <a href="{{route('/')}}" class="navbar-brand ps-5 me-0">
    
            <img src="{{asset('styles/img/LOGO1.jpg')}}" alt="" class="imgfluid">
        </a>
        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{route('/')}}" class="nav-item nav-link active">Accueil</a>
                <a href="{{route('quisommesnous')}}" class="nav-item nav-link">Qui sommes nous?</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Nos services</a>
                    <div class="dropdown-menu bg-light m-0">
                        <a href="{{route('multirisqpro')}}" class="dropdown-item">Multirisque Professionnel</a>
                        <a href="{{route('multirisqhab')}}" class="dropdown-item">Multirisque Habitation</a>
                        <a href="{{route('tousrisqchan')}}" class="dropdown-item">Tous Risque Chantier</a>
                        <a href="{{route('assurancetrans')}}" class="dropdown-item">Assurance Transport</a>
                        <a href="{{route('assurancevoy')}}" class="dropdown-item">Assurance Voyage</a>
                        <a href="{{route('assurancemal')}}" class="dropdown-item">Assurance Maladie</a>
                        <a href="{{route('assuranceauto')}}" class="dropdown-item">Assurance Automobile</a>
                    </div>
                </div>
                <a href="{{route('contact.index')}}" class="nav-item nav-link">Contactez-Nous</a>
            </div>
            <a href="{{route('actualite')}}" class="btn btn-primary px-3 d-none d-lg-block">Nos actualités</a>
            
        </div>
        
    </nav>
    <!-- Navbar End -->