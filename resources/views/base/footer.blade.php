
    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Nos Info</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>09BP 3215 Adjamé 09</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+225 2720272736 </p>
                    <p class="mb-2 mailtxt"><i class="fa fa-envelope me-3"></i>contact@scimassurance.com</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Nos pages</h5>
                    <a class="btn btn-link" href="{{route('/')}}">Accueil</a>
                    <a class="btn btn-link" href="{{route('quisommesnous')}}">Qui sommes Nous?</a>
                    <a class="btn btn-link" href="{{route('contact.index')}}">Contactez-Nous</a>
                    <a class="btn btn-link" href="{{route('actualite')}}">Actualités</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Horaires</h5>
                    <p class="mb-1">Lundi - Vendredi</p>
                    <h6 class="text-light">08:00 am - 17:00 pm</h6>
                    <p class="mb-1">Saturday</p>
                    <h6 class="text-light">09:00 am - 12:00 pm</h6>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Newsletter</h5>
                    <p>
                        Inscrivez-vous à notre newsletters et rester informé des offres spéciales exclusives.
                    </p>
                    <form class="position-relative w-100 formletter" action="{{route('newsletter.store')}}" method="post">
                    @csrf
                        <input name="adresse_mail" class="form-control bg-transparent w-100 py-3 ps-4 pe-5 caseletter" type="email"
                            placeholder="Email">
                        <button type="submit"
                            class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">S'inscrire</button>
                    </form>
                    @if(Session::has('success'))
        <div class="alert alert-success" style="text-align:center; height:auto; width:auto; font-size:15px">
        {{Session::get('success')}}
        </div>
        @endif
        @include('base.errors')
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container text-center">
            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
            <p class="mb-0">&copy; created By <a class="fw-semi-bold" href="https://eso-dev.com">Eso-dev</a> 

        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('styles/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('styles/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('styles/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('styles/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('styles/lib/counterup/counterup.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('styles/js/main.js')}}"></script>
    <script src="{{asset('styles/js/contact.js')}}"></script>
</body>

</html>