@extends('app')

@section('home')

<!-- banner -->
    <div id="myCarousel" class="carousel slide banner_main" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide" src="images/banner.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <h1> <span>We Provide</span> Web Services</h1>
                        <a href="#contact">Contact Us</a>
                    </div>
               </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide" src="images/banner.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <h1> <span>We Provide</span> Web Services</h1>
                        <a href="#contact">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="images/banner.jpg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <h1> <span>We Provide</span> Web Services</h1>
                        <a href="#contact">Contact Us</a>
                    </div>
               </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="images/banner.jpg" alt="four slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <h1> <span>We Provide</span> Web Services</h1>
                        <a href="#contact">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="images/banner.jpg" alt="five slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <h1> <span>We Provide</span> Web Services</h1>
                        <a href="#contact">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>
  <!-- end banner -->

    <div class="liste_services">
        <ol>
            @foreach($expertises as $expertise)
                <li>{{ $numero++." ".$expertise->expertise }}</li>
            @endforeach
        </ol>
    </div>

<div class="corp">
	<!-- clients -->
    <div class="clients">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="titlepage">
                        <h2>Team DadServices</h2>
                     	<span></span>
                  	</div>
               	</div>
            </div>
            <div class="row">
               	<div class="col-md-12">
                  	<div class="clients_box">
                     	<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                  	</div>
                  	<div class="jonu">
                     	<img src="images/equipe.jpg" alt="#"/>
                     	<h3>Jone due</h3>
                     	<strong>(La qualité de nos services)</strong>
                  	</div>
               	</div>
            </div>
        </div>
    </div>
    <!-- end clients -->

    <!-- about -->
    <div id="about"  class="about">
        <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  	<div class="about_img">
                     	<figure><img src="images/our.jpg" alt="#"/></figure>
                  	</div>
               	</div>
               	<div class="col-md-7">
                  	<div class="titlepage">
                     	<h2>Web Development</h2>
                     	<span></span>
                     	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
                     	<a class="read_more" href="demande_service.html">Demander<i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                  	</div>
               	</div>
            </div>
        </div>
    </div>
    <!-- end about -->
</div>
@endsection