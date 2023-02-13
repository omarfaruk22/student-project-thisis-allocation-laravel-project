@extends('frontend.master_template.frontend_template')

@section('frontend')
<div class="jumbotron jumbotron-fluid page-header position-relative overlay-bottom" style="margin-bottom: 90px;">
        <div class="container text-center py-5">
            <h1 class="text-white display-1">Reasearch Field</h1>
            <div class="d-inline-flex text-white mb-5">
                <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Reasearch Field</p>
            </div>
          
        </div>
    </div>
    <!-- Header End -->


    <!-- Courses Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row mx-0 justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center position-relative mb-5">
                        <h6 class="d-inline-block position-relative text-secondary text-uppercase pb-2">Research Field</h6>
                        <h1 class="display-4">Check Reasearch Field</h1>
                    </div>
                </div>
            </div>
            <div class="row">
            @foreach($showfield as $data)
                <div class="col-lg-4 col-md-6 pb-4">
                    <img  style="height:300px;width: 300px;"class="img-fluid " src="{{asset('backend/projectimage/'.$data->image)}}" alt="">
                        <div class="courses-text">
                        <h4 class="text-center text-black px-3">{{$data->title}}</h4>
                            <div class="border-top w-100 mt-3">
                                <div class="d-flex justify-content-between p-5">
                                <span class="text-black"><i class="fa fa-star mr-2"></i>Supervisor Name:</span>
                                <span class="text-black"><i class="fa fa-user mr-2"></i>{{$data->fuculty_details->fname}}</span>
                                </div>
                            </div>
                        </div>
                    </a>
                   
                   
                </div>
                @endforeach

                <div class="mx-auto pb-10 w-4/5">
                {{$showfield->links()}}
                </div>
                
              
            </div>
            
        </div>
    </div>


@endsection