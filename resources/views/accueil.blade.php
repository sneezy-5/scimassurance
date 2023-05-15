@extends("base.accueilapp")


@section('title', 'SCIM.ASSURANCES')

@section('content')

@include('base.banniere')


    <!-- About Start -->
    <div class="container-xxl py-5">

        <div class="container">
            
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="row gx-3 h-100">
                        <div class="col-6 align-self-start wow fadeInUp" data-wow-delay="0.1s">
                            <img class="img-fluid" src="{{asset('styles/img/img (10).jpg')}}">
                        </div>
                        <div class="col-6 align-self-end wow fadeInDown" data-wow-delay="0.1s">
                            <img class="img-fluid" src="{{asset('styles/img/img (9).jpg')}}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="fw-medium text-uppercase text-primary mb-2">Qui sommes Nous ?</p>
                    <h1 class="display-5 mb-4">sCim Assurances</h1>
                    <p class="mb-4">La Société de Conseils et d'Intermédiation en Assurances (<span style="color:orange;">sCim Assurances</span> ), fort de sa position
                        de courtier indépendant, a forgé de vraies valeurs, à travers son dirigeant qui capitalise
                        vingt-cinq (<span style="color:orange;">25</span> ) ans de professionnalisme, :

                    </p>

                    
                    <a href="{{route('quisommesnous')}}" class="btn btn-primary"> Voir plus</a>

                    <div class="row pt-2">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-envelope-open text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="mb-2">Email pro</p>
                                    <h6 class="mb-0 mailtxt">contact@ <br>scimassurance.com</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-phone-alt text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <p class="mb-2">Contactez-Nous</p>
                                    <h6 class="mb-0">+225 2720272736</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Facts Start -->
    <div class="container-fluid facts my-5 p-5">
        <div class="row g-5">
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="text-center border p-5">
                    <i class="fa fa-certificate fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0 " data-toggle="counter-up">25</h1>
                    <span class="fs-5 fw-semi-bold text-white titrepkw">ans d'expériences</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="text-center border p-5">
                    <i class="fa fa-users-cog fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">10</h1>
                    <span class="fs-5 fw-semi-bold text-white titrepkw">Membres</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="text-center border p-5">
                    <i class="fa fa-users fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">150</h1>
                    <span class="fs-5 fw-semi-bold text-white titrepkw">Clients et plus</span>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="text-center border p-5">
                    <i class="fa fa-check-double fa-3x text-white mb-3"></i>
                    <h1 class="display-2 text-primary mb-0" data-toggle="counter-up">20</h1>
                    <span class="fs-5 fw-semi-bold text-white titrepkw">Projects et plus</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative me-lg-4">
                        <img class="img-fluid w-100" src="{{asset('styles/img/img (3).png')}}" alt="">
                        <span
                            class="position-absolute top-50 start-100 translate-middle bg-white rounded-circle d-none d-lg-block"
                            style="width: 120px; height: 120px;"></span>
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="fw-medium text-uppercase text-primary mb-2">POURQUOI NOUS</p>
                    <h1 class="display-5 mb-4">Pourquoi nous choisir ?</h1>
                    <p class="mb-4">Si nos clients nous renouvellent leur confiance,c'est parce que nous trouvons pour eux
                        les solutions les plus perfirmantes et les plus innovantes, en associant la technicité à la relation humaine.
                    </p>
                    <div class="row gy-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Humanisme</h4>
                                    <span>
                                        L'humanisme est un concept fondamental qui guide notre entreprise d'assurance dans toutes nos activités et nos interactions avec nos clients.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Agilité</h4>
                                    <span>
                                        Chez sCim Assurances, nous avons adopté une approche agile pour offrir des solutions d'assurance efficaces et personnalisées à nos clients.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4 class="titrepkw">Indépendance</h4>
                                    <span>
                                        Notre indépendance nous permet de travailler avec un large éventail de fournisseurs d'assurance pour offrir à nos clients les options les plus adaptées à leurs besoins.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


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


        <!-- Project Start -->
    <div class="container-fluid bg-dark pt-5 my-5 px-0">
        <div class="text-center mx-auto mt-5 wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="fw-medium text-uppercase text-primary mb-2">Visitez</p>
            <h1 class="display-5 text-white mb-5">Les Actualités sur nos produits</h1>
        </div>
        <div class="owl-carousel project-carousel wow fadeIn" data-wow-delay="0.1s">
        @foreach ($multirisqpro as $multi)
            <a class="project-item" href="{{route('multirisqpro')}}">
     
                <img class="img-fluid" src="{{asset('storage/image/'.$multi->image)}}" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">{{$multi->type}}</h5>
                    
                </div>
                <div style="text-align: center;">
                <p>{{$multi->title}}</p>
                </div>
            </a>
            @endforeach

            @foreach ($assutrans as $trans)
                
            
            <a class="project-item" href="{{route('assurancetrans')}}">
                <img class="img-fluid" src="{{asset('storage/image/'.$trans->image)}}" alt="">
                <div class="project-title">
                <h5 class="text-primary mb-0">{{$trans->type}}</h5>
                    
                </div>
                <div style="text-align: center;">
                <p>{{$trans->title}}</p>
                </div>
            </a>

            @endforeach

            @foreach ($tousrisqchan as $chant)
                
            
            <a class="project-item" href="{{route('tousrisqchan')}}">
                <img class="img-fluid" src="{{asset('storage/image/'.$chant->image)}}" alt="">
                <div class="project-title">
                <h5 class="text-primary mb-0">{{$chant->type}}</h5>
                    
                </div>
                <div style="text-align: center;">
                <p>{{$chant->title}}</p>
                </div>
            </a>
            @endforeach

            @foreach ($multirisqhab as $habit )
                
            
            <a class="project-item" href="{{route('multirisqhab')}}">
                <img class="img-fluid" src="{{asset('storage/image/'.$habit->image)}}" alt="">
                <div class="project-title">
                <h5 class="text-primary mb-0">{{$habit->type}}</h5>
                    
                </div>
                <div style="text-align: center;">
                <p>{{$habit->title}}</p>
                </div>
            </a>

            @endforeach
            

            @foreach ($assuauto as $auto)
           
            <a class="project-item" href="{{route('assuranceauto')}}">
                <img class="img-fluid" src="{{asset('storage/image/'.$auto->image)}}" alt="">
                <div class="project-title">
                <h5 class="text-primary mb-0">{{$auto->type}}</h5>
                    
                </div>
                <div style="text-align: center;">
                <p>{{$auto->title}}</p>
                </div>
            </a>

            @endforeach


            @foreach ($assuvoy as $voya)
                
            <a class="project-item" href="{{route('assurancevoy')}}">
                <img class="img-fluid" src="{{asset('storage/image/'.$voya->image)}}" alt="">
                <div class="project-title">
                    <h5 class="text-primary mb-0">{{$voya->type}}</h5>
                                
                 </div>
                 <div style="text-align: center;">
                    <p>{{$voya->title}}</p>
                </div>
            </a>
            @endforeach

            @foreach ($assumala as $mala)
             
            <a class="project-item" href="{{route('assurancemal')}}">
                <img class="img-fluid" src="{{asset('storage/image/'.$mala->image)}}" alt="">
                <div class="project-title">
                <h5 class="text-primary mb-0">{{$mala->type}}</h5>
                         
                </div>
                <div style="text-align: center;">
                <p>{{$mala->title}}</p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
    <!-- Project End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">

        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2">Nos services</p>
                <h1 class="display-5 mb-4">Produits Entreprise</h1>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <img class="img-fluid" src="{{asset('styles/img/img (11).jpg')}}" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="{{asset('styles/img/img (11).jpg')}}" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Multirisque Professionnel</h3>
                                <small>Avec nous, anticipez sur les risques et protégez votre entreprise</small>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">
                                    Un incendie, un dégât des eaux, un vol ou un problème informatique...Peut ralentire ou stopper votre activité...
                                </p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="{{route('multirisqpro')}}">Voir Plus</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <img class="img-fluid" src="{{asset('styles/img/img (12).jpg')}}" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="{{asset('styles/img/img (12).jpg')}}" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Assurance Transport</h3>
                                <small>L'assurance des Marchandises Transportées</small>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Vous souhaitez acheminer vos marchandises en toute sécurité par voie maritime, aérienne ou terrestre ? 
                                    la sCim assure vos marchandises jusqu'à...
                                </p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="{{route('assurancetrans')}}">Voir Plus</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <img class="img-fluid" src="{{asset('styles/img/img (14).jpg')}}" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="{{asset('styles/img/img (14).jpg')}}" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Tous Risques Chantier</h3>
                                <small>Vos Opérations de Construction en toute Serenite</small>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Ce poduit couvre l'ouvrage contre les dommages materiels qui pourraient survenir pendant la durée de vos travaux; Garanties offertes;...</p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="{{route('tousrisqchan')}}">Voir Plus</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
    
                <h1 class="display-5 mb-4">Produits Particulier et Familles</h1>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <img class="img-fluid" src="{{asset('styles/img/img (13).png')}}" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="{{asset('styles/img/img (13).png')}}" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Multirisque Habitation</h3>
                                <small>Votre logement, c'est important</small>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">L'assurance multirisque habitation répond au plus près à vos attentes.
                                Elle protège votre logement et vos biens matériels contre...
                                </p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="{{route('multirisqhab')}}">Voir Plus</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <img class="img-fluid" src="{{asset('styles/img/img (16).png')}}" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="{{asset('styles/img/img (16).png')}}" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Assurance Voyage</h3>
                                <small>L'assistance à l'étranger</small>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Cette garantie vous couvre (vous et/ou votre famille) pendantle voyage et toute la durée de votre 
                                    séjour à travers le monde entier,en cas de ....
                                </p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="{{route('assurancevoy')}}">Voir Plus</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <img class="img-fluid" src="{{asset('styles/img/img (21).jpg')}}" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="{{asset('styles/img/img (21).jpg')}}" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Assurance Maladie</h3>
                                <small>Assistance maladie pour vous et votre famille</small>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">Cette assurance a pour objet de garantir les frais médicaux, de la pharmacie, des analyses médicales ou ....</p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="{{route('assurancemal')}}">Voir Plus</a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <img class="img-fluid" src="{{asset('styles/img/img (20).jpg')}}" alt="">
                        <div class="service-img">
                            <img class="img-fluid" src="{{asset('styles/img/img (20).jpg')}}" alt="">
                        </div>
                        <div class="service-detail">
                            <div class="service-title">
                                <hr class="w-25">
                                <h3 class="mb-0">Assurance Automobile</h3>
                                <small>Peu importe le type et la marque de votre voiture</small>
                                <hr class="w-25">
                            </div>
                            <div class="service-text">
                                <p class="text-white mb-0">L'assurance auto a pour objet de couvrir votre responsabilité civil en tant que propriétaire d'un véhicule.D'autres risques sont disponibles pour la protection de votre...</p>
                            </div>
                        </div>
                        <a class="btn btn-light" href="{{route('assuranceauto')}}">Voir Plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->





    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="fw-medium text-uppercase text-primary mb-2">Notre Equipe</p>
                <h1 class="display-5 mb-5">Nos Membres</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <img class="img-fluid" src="{{asset('styles/img/personnel (1).jpg')}}" alt="">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px;">
                                <h5>Wilfried Ouattara</h5>
                                <span class="text-primary">CEO & Founder</span>
                                <div class="team-social">
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <img class="img-fluid" src="{{asset('styles/img/personnel (2).jpg')}}" alt="">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px;">
                                <h5>Adriane</h5>
                                <span class="text-primary">Project Manager</span>
                                <div class="team-social">
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <img class="img-fluid" src="{{asset('styles/img/personnel (3).jpg')}}" alt="">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-square bg-primary" style="width: 90px; height: 90px;">
                                <i class="fa fa-2x fa-share text-white"></i>
                            </div>
                            <div class="position-relative overflow-hidden bg-light d-flex flex-column justify-content-center w-100 ps-4"
                                style="height: 90px;">
                                <h5>Peter Farel</h5>
                                <span class="text-primary">Engineer</span>
                                <div class="team-social">
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-dark rounded-circle mx-1" href=""><i
                                            class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Team End -->

@endsection