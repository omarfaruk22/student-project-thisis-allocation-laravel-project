@extends('frontend.master_template.frontend_template')

@section('frontend')


    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center my-5 py-5">
            <!-- <h1 class="text-white mt-4 mb-4">Learn </h1> -->
            <h1 class="text-white display-4 ">Student Project Allocation & Management System</h1>
            <!-- <div class="mx-auto mb-5" style="width: 100%; max-width: 600px;">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-light bg-white text-body px-4 dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Courses</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Courses 1</a>
                            <a class="dropdown-item" href="#">Courses 2</a>
                            <a class="dropdown-item" href="#">Courses 3</a>
                        </div>
                    </div>
                    <input type="text" class="form-control border-light" style="padding: 30px 25px;" placeholder="Keyword">
                    
                </div>
            </div> -->
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-5 mb-5 mb-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{asset('frontend/img/3.jpg')}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">About </h6>
                        <h1 class="display-4">About this System</h1>
                    </div>
                    <p>This System is a web-based application that simplifies the process of assigning and managing thesis and project tasks for students and faculty members.
                        The system has three types of users: admin, faculty members, and students. 
                         The admin is responsible for maintaining data, while teachers and students can communicate with each other through the system and online mail. 
                         The system also allows students to choose their preferred project or thesis field under a faculty member and provides a centralized platform for tracking and managing projects. </p>
                    <div class="row pt-3 mx-0">
                        <div class="col-3 px-0">
                            <div class="bg-success text-center p-4">
                                <h1 class="text-white" data-toggle="counter-up">{{$countfaculty}}</h1>
                                <h6 class="text-uppercase text-white">Available<span class="d-block">Supervisor</span></h6>
                            </div>
                        </div>
                        <div class="col-3 px-0">
                            <div class="bg-primary text-center p-4">
                                <h1 class="text-white" data-toggle="counter-up">{{$countfield}}</h1>
                                <h6 class="text-uppercase text-white"><span class="d-block">Area of Interest</span></h6>
                            </div>
                        </div>
                        <div class="col-3 px-0">
                            <div class="bg-secondary text-center p-4">
                                <h1 class="text-white" data-toggle="counter-up">{{$countcontact}}</h1>
                                <h6 class="text-uppercase text-white">No. of<span class="d-block">comments</span></h6>
                            </div>
                        </div>
                        <div class="col-3 px-0">
                            <div class="bg-warning text-center p-4">
                                <h1 class="text-white" data-toggle="counter-up">{{$countgroup}}</h1>
                                <h6 class="text-uppercase text-white"><span class="d-block">Students of group</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-image" style="margin: 90px 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 my-5 pt-5 pb-lg-5">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">uses</h6>
                        <h1 class="display-4">How to using this, as a Student?</h1>
                    </div>
                    <p class="mb-4 pb-2">Firstly, students form a group with a maximum of two students and submit their group name to the admin. Secondly, the group submits payment details, and after the admin validates them, the students can choose their supervisor and make contact with her.</p>
                    <!-- <div class="d-flex mb-3">
                        <div class="btn-icon bg-primary mr-4">
                            <i class="fa fa-2x fa-graduation-cap text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Skilled Instructors</h4>
                            <p>Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no nonumy et eos dolor magna ipsum.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="btn-icon bg-secondary mr-4">
                            <i class="fa fa-2x fa-certificate text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>International Certificate</h4>
                            <p>Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no nonumy et eos dolor magna ipsum.</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="btn-icon bg-warning mr-4">
                            <i class="fa fa-2x fa-book-reader text-white"></i>
                        </div>
                        <div class="mt-n1">
                            <h4>Online Classes</h4>
                            <p class="m-0">Labore rebum duo est Sit dolore eos sit tempor eos stet, vero vero clita magna kasd no nonumy et eos dolor magna ipsum.</p>
                        </div>
                    </div> -->
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{asset('frontend/img/5.png ')}}" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature Start -->


    <!-- Courses Start -->
    <div class="container-fluid px-0 py-5">
        <div class="row mx-0 justify-content-center pt-5">
            <div class="col-lg-6">
                <div class="section-title text-center position-relative mb-4">
                    <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Project or thisis area</h6>
                    <h1 class="display-4">Check Research Field</h1>
                </div>
            </div>
        </div>
        <?php
        use App\Models\Backend\Project;
        $show=Project::with('fuculty_details')->get();
     //dd($show);
       
        
        ?>
     
        <div class="owl-carousel courses-carousel">
         @foreach($show as $data)
         <div class="caro">
            <div class="courses-item position-relative ">
                <img  class="img-fluid " src="{{asset('backend/projectimage/'.$data->image)}}" alt="">
                <div class="courses-text ">
                    <h4 class="text-center text-white px-3">{{$data->title}}</h4>
                    <div class="border-top w-100 mt-3">
                        <div class="d-flex justify-content-between p-4">
                        <span class="text-white"><i class="fa fa-star mr-2"></i>Supervisor Name</span>
                            <span class="text-white"><i class="fa fa-user mr-2"></i>{{$data->fuculty_details->fname}}</span>
                          
                        </div>
                    </div>
                    <!-- <div class="w-100 bg-white text-center p-4" >
                        <a class="btn btn-primary" href="detail.html">Course Detail</a>
                    </div> -->
                </div>
            </div>
            </div>
            @endforeach
            
            
        </div>
        
    </div>
    <!-- Courses End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="section-title text-center position-relative mb-5">
                <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Instractors</h6>
                <h1 class="display-4">Meet Our Instractors</h1>
            </div>
            <div class="owl-carousel team-carousel position-relative" style="padding: 0 30px;">
                <div class="team-item">
                    <img style="height:250px;width:200px;" class="img-fluid w-100 " src="{{asset('frontend/img/f1.jfif')}}" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Adnan Ferdous Ashrafi</h5>
                        <p class="mb-2">Senior Lecturer</p>
                        <div class="d-flex justify-content-center">
                         
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img style="height:250px;width:200px;" class="img-fluid w-100 " src="{{asset('frontend/img/f2.jfif')}}" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Shifat Shamin Shapla</h5>
                        <p class="mb-2">Senior Lecturer</p>
                        <div class="d-flex justify-content-center">
                        
                            
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img style="height:250px;width:200px;" class="img-fluid w-100 " src="{{asset('frontend/img/f1.jfif')}}" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-0">Muhammed Yaseen Morshed Adib</h5>
                        <p class="mb-0">Lecturer</p>
                        <div class="d-flex justify-content-center">
                        
                            
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img style="height:250px;width:200px;" class="img-fluid w-100 " src="{{asset('frontend/img/f1.jfif')}}" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Tamjid Rahman</h5>
                        <p class="mb-2">Assistant Professor</p>
                        <div class="d-flex justify-content-center">
                        
                            
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img style="height:250px;width:200px;" class="img-fluid w-100 " src="{{asset('frontend/img/f2.jfif')}}" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Tamanna Haque Nipa</h5>
                        <p class="mb-2">Assistant Professor</p>
                        <div class="d-flex justify-content-center">
             
                            
                        </div>
                    </div>
                </div>
                <div class="team-item">
                    <img style="height:250px;width:200px;" class="img-fluid w-100 " src="{{asset('frontend/img/f1.jfif')}}" alt="">
                    <div class="bg-light text-center p-4">
                        <h5 class="mb-3">Tarikuzzaman Emon</h5>
                        <p class="mb-2">Assistant Professor</p>
                        <div class="d-flex justify-content-center">
             
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-5 mb-lg-0">
                    <div class="bg-light d-flex flex-column justify-content-center px-5" style="height: 450px;">
                        <div class="d-flex align-items-center mb-5">
                            <div class="btn-icon bg-primary mr-4">
                                <i class="fa fa-2x fa-map-marker-alt text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Our Location</h4>
                                <p class="m-0">1217 Romna, Dhaka, Bangladesh</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-5">
                            <div class="btn-icon bg-secondary mr-4">
                                <i class="fa fa-2x fa-phone-alt text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Call Us</h4>
                                <p class="m-0">+012 345 6789</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="btn-icon bg-warning mr-4">
                                <i class="fa fa-2x fa-envelope text-white"></i>
                            </div>
                            <div class="mt-n1">
                                <h4>Email Us</h4>
                                <p class="m-0">info@example.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-title position-relative mb-4">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Need Help?</h6>
                        <h1 class="display-4">Send Us A Message</h1>
                    </div>
                    <div class="contact-form">
                        <form action="{{route('contactstore')}}" method="post">
                        @csrf
                            <div class="row">
                                <div class="col-6 form-group">
                                    <input type="text" name="name" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Your Name" required="required">
                                </div>
                                <div class="col-6 form-group">
                                    <input type="email" name="email" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Your Email" required="required">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="subject" class="form-control border-top-0 border-right-0 border-left-0 p-0" placeholder="Subject" required="required">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control border-top-0 border-right-0 border-left-0 p-0" name="description"rows="5" placeholder="Message" required="required"></textarea>
                            </div>
                            <div>
                                <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
  
    

