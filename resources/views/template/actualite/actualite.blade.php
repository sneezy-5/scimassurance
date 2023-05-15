@extends('base.accueilapp')


@section('content')

     <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Nos actualités</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="{{route('/')}}">Accueil</a></li>
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
                    <p>{{$habit->title}}</p>
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


@endsection