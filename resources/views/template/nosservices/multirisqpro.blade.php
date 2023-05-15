@extends('base.accueilapp')

@section('content')
    
        <!-- Page Header Start -->
        <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Multirisque Professionnel</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="{{route('/')}}">Acceuil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Multirisque Professionnel</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->






    <main>
        <!-- slider Area Start-->
        <div class="slider-area ">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap pt-100">
                                <h2>Multirisque Professionnel</h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('/')}}">Accueil</a></li>
                                    <li class="breadcrumb-item"><a href="#">Multirisque Professionnel</a></li> 
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- Services Details Start -->
        <div class="services-details-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="single-services section-padding2">
                            <div class="details-img mb-40">
                                <img src="img/multirisque1.png" alt="" style="width: 100%;">
                            </div>
                            <div class="details-caption">

                                <p class="mb-50 mt-3">
                                    Un incendie, un dégât des eaux, un vol ou un problème informatique...Peut ralentire ou stopper votre activité.L'assurance Multirisque Professionnelle participe
                                    à la poursuite de votre activité et vous couvre contre les risques de :
                                    <ul>
                                        <li>Incendie / explosion des locaux;</li>
                                        <li>Dégât des eaux;</li>
                                        <li>Bris de glaces;</li>
                                        <li>Tous risque informatique;</li>
                                        <li>Vol dans les locaux de l'entreprise;</li>
                                        <li>Responsabilité civil Professionnelle;</li>
                                        <li>Bris de machines;</li>
                                        <li>Transport de fonds.</li>
                                    </ul>
                                </p>
                                <a href="{{route('contact.index')}}" class="btn btn-primary">Contactez-Nous</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Details End -->
    </main>
    
    









    <!-- Video Modal Start -->
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- 16:9 aspect ratio -->
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen
                            allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->

@endsection