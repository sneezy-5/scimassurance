@extends('base.accueilapp')


@section('content')

    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Contact</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                    
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 justify-content-center mb-5">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light text-center h-100 p-5">
                        <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                            <i class="fa fa-phone-alt fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-3">Contacts</h4>
                        <p class="mb-2">+225 2720272736</p>
                        <a class="btn btn-primary px-4" href="tel:+2252720272736">Contactez-Nous <i
                                class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-light text-center h-100 p-5">
                        <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                            <i class="fa fa-envelope-open fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-3">Address Email</h4>
                        <p class="mb-2 titrepkw">contact@scimassurances.net</p>
                        <a class="btn btn-primary px-4" href="mailto:contact@scimassurance.com">Email<i
                                class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light text-center h-100 p-5">
                        <div class="btn-square bg-white rounded-circle mx-auto mb-4" style="width: 90px; height: 90px;">
                            <i class="fa fa-map-marker-alt fa-2x text-primary"></i>
                        </div>
                        <h4 class="mb-3">Local</h4>
                        <p class="mb-2">Abidjan Adjamé, face Fraternité Matin</p>
                        <a class="btn btn-primary px-4" href="https://goo.gl/maps/FsznshxgnULBGgkN9"
                            target="blank">Direction <i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <iframe class="w-100"
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6680.870696754795!2d-4.017866373306829!3d5.345074300000005!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1eb0f446eeeeb%3A0xa0182e159741de7c!2sSCIM%20ASSURANCES!5e0!3m2!1sfr!2sci!4v1682067838359!5m2!1sfr!2sci"
                        frameborder="0" style="min-height: 450px; border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0">
                    </iframe>

                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fw-medium text-uppercase text-primary mb-2">Contactez-Nous</p>
                    <h1 class="display-5 mb-4" >Si vous avez des questions, n'hésitez pas à nous contacter</h1>

                   <p>
                    Si vous souhaitez nous contacter pour poser des questions, nous faire part de vos commentaires ou de vos préoccupations, nous sommes heureux de vous aider.

                    Pour nous contacter, vous pouvez remplir le formulaire de contact disponible sur notre site. Assurez-vous de fournir une <span style="color: orange;">adresse e-mail</span>  valide pour que nous puissions vous répondre.
                   </p>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <form class="formcontact" action="{{route('contact.store')}}" method="post">
                    @csrf
                    @if(Session::has('success'))
        <div class="alert alert-success" style="text-align:center; height:auto; width:auto; font-size:15px">
        {{Session::get('success')}}
        </div>
        @endif
        @include('base.errors')
                        <small class=" m-2 card-text alert alert-danger p-1 alerteform" role="alert" style="display: none; justify-content: center; align-items: center;">* Veuillez remplir tous les champs</small>
         
       
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input name="nom_complet" type="text" class="form-control caseform" id="name" placeholder="Your Name">
                                    <label for="name">Nom et Prénoms</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input name="email" type="email" class="form-control caseform" id="email" placeholder="Your Email">
                                    <label for="email">Mail</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" name="sujet" class="form-control caseform" id="subject" placeholder="Subject">
                                    <label for="subject">Sujet</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea name="message" class="form-control caseform" placeholder="Leave a message here" id="message"
                                        style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-2 px-3" type="submit">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


@endsection