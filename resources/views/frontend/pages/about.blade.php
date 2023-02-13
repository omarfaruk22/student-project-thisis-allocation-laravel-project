@extends('frontend.master_template.frontend_template')

@section('frontend')
<div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-1">About</h1>
            <div class="d-inline-flex text-white mb-5">
                <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">About</p>
            </div>
           
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-1">
        <div class="container py-1">
            <div class="row">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img style="height: 400px;" class="position-absolute w-100 h-55" src="{{asset('frontend/img/4.jpg')}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-1">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-1">About Us</h6>
                        <h1 class="display-4">Who We Are</h1>
                    </div>
                    <p>Meet Omar Faruk and Fahima Riya, experienced PHP and laravel developers with a passion for creating cutting-edge web applications. Their deep understanding of PHP and its frameworks, combined with their commitment to delivering high-quality results, make them valuable assets to any PHP development project. They are dedicated to staying up-to-date with the latest advancements in the language."</p>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="section-title text-center position-relative mb-5">
                <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Developers</h6>
                <h1 class="display-4">Meet Our Developers</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative" style="padding: 0 30px;">
                <div class="team-item">
                    <img style="height:300px;" class="img-fluid w-100 " src="{{asset('frontend/img/1.jpg')}}" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Omar Faruk</h5>
                        <p class="mb-2">Web Design & Development</p>
                        <div class="d-flex justify-content-center">
                        <a class="mx-1 p-1" href="https://github.com/omarfaruk22"><i class="fab fa-github"></i></a>
                        <a class="mx-1 p-1" href="https://www.linkedin.com/in/omar-faruk-002793257/"><i class="fab fa-linkedin-in"></i></a>
                            
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img style="height:300px;" class="img-fluid w-100 " src="{{asset('frontend/img/team-3.jpg')}}" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Fahima Riya</h5>
                        <p class="mb-2">Web Design & Development</p>
                        <div class="d-flex justify-content-center">
                        <a class="mx-1 p-1" href="#"><i class="fab fa-github"></i></a>
                        <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img style="height:300px;" class="img-fluid w-100 " src="{{asset('frontend/img/1.jpg')}}" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Omar Faruk</h5>
                        <p class="mb-2">Web Design & Development</p>
                        <div class="d-flex justify-content-center">
                        <a class="mx-1 p-1" href="https://github.com/omarfaruk22"><i class="fab fa-github"></i></a>
                        <a class="mx-1 p-1" href="https://www.linkedin.com/in/omar-faruk-002793257/"><i class="fab fa-linkedin-in"></i></a>
                            
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img style="height:300px;" class="img-fluid w-100 " src="{{asset('frontend/img/team-3.jpg')}}" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Fahima Riya</h5>
                        <p class="mb-2">Web Design & Development</p>
                        <div class="d-flex justify-content-center">
                        <a class="mx-1 p-1" href="#"><i class="fab fa-github"></i></a>
                        <a class="mx-1 p-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Start -->



@endsection