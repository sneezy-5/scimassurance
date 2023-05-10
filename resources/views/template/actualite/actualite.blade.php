@extends('base.accueilapp')


@section('content')

     <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Nos actualités</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Nos actualités</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Project Start -->
    <div class="container-fluid py-5 my-5 px-0">
        <div class="text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">

            <h1 class="display-5 mb-5">Actualités</h1>
        </div>
        <div class="owl-carousel project-carousel wow fadeIn" data-wow-delay="0.1s">
            @foreach ($multirisqpro as $multi)
            <a class="project-item" href="">
     
                <img class="img-fluid" src="{{asset('storage/image/'.$multi->image)}}" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Multirisque Professionnel</h5>
                </div>
            </a>
            @endforeach
            <a class="project-item" href="">
                <img class="img-fluid" src="{{asset('styles/img/promo 6.jpg')}}" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Assurance Transport</h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="{{asset('styles/img/project-1.jpg')}}" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Tous Risque Chantier</h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="{{asset('styles/img/promo (4).jpg')}}" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Multirisque Habitation</h5>
                </div>
            </a>

            <a class="project-item" href="">
                <img class="img-fluid" src="{{asset('styles/img/promo.jpg')}}" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Assurance Automobile</h5>
                </div>
            </a>

            <a class="project-item" href="">
                <img class="img-fluid" src="{{asset('styles/img/promo (1).jpg')}}" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Assurance Voyage</h5>
                </div>
            </a>
            <a class="project-item" href="">
                <img class="img-fluid" src="{{asset('styles/img/promo sante.jpg')}}" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">Assurance Maladie</h5>
                </div>
            </a>


        </div>
    </div>
    <!-- Project End -->


@endsection