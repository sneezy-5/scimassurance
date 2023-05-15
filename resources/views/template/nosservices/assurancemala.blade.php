@extends('base.accueilapp')

@section('content')
        <!-- Page Header Start -->
        <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Assurance Maladie</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="{{route('/')}}">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Assurance Maladie</li>
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
                                <h2>Assurance Maladie</h2>
                                <nav aria-label="breadcrumb ">
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('/')}}">Accueil</a></li>
                                    <li class="breadcrumb-item"><a href="#">Assurance Maladie</a></li> 
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
                                <img src="{{asset('styles/img/NEW (4).jpg')}}" alt="" style="width: 100%;">
                            </div>
                            <div class="details-caption">

                                <p class="mb-50 mt-3">
                                    Cette assurance a pour objet de garantir les frais médicaux, de la pharmacie, des analyses médicales ou des soins dentaires exposés par vous-même et /ou un membre de votre famille.

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
    
@endsection

