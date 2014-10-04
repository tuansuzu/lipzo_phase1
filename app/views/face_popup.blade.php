@extends('layouts.main')

@section('content')

<section id="face-main-banner">
          <div class="container">
            <div class="row ">
                <div class="col-sm-12">
                    <div class="face-image-banner">
                         <img src="{{asset('images/face-banner-picture.png')}}" alt="face banner" class="img-responsive">
                    </div>   

                    <div class="bi-mat-nu-cuoi">
                        <h2>Bí quyết</h2>
                        <h1>cười xinh</h1>
                    </div>

                </div>
              
            </div>
            <div class="row "> 
               <div class="col-sm-12">
                    <div class="face-image-text">
                        <img src="{{asset("images/face-headline-text.png")}}" alt="face text" class="img-responsive hidden-xs">
                        <img src="{{asset("images/face-headline-text-mobile.png")}}" alt="face text" class="img-responsive hidden-sm hidden-md hidden-lg">
                    </div>
                   
                </div>
            </div>
        
            
          </div><!-- /.container -->

    </section><!--/#face-main-banner -->

 
 
    <section id="face-main-content">
        <div class="container">
                    <div id="face-section" class="row">
                        @if(Count($faces))
                            @foreach($faces as $face)
                           
                            <div class="col-xs-6 col-sm-4 col-md-3">
                                 <div class="thumbnail">
                                    <a href="#" >
                                        <img class="img-responsive img-thumbnail img-circle glow-white" src="{{URL::to('/')}}/uploads/originals/{{$face->cover_image}}" alt="" >
                                    </a>
                                    <div class="caption">
                                        <h3>{{$face->title}}</h3>
                                        <p class="text-description truncate">{{$face->short_desc}}...</p>
                                        
                                    </div>
                                </div>
                            </div>

                            @endforeach

                        @endif               
                        
                    </div><!-- /.row -->                 

                    <div class="top30"></div>

                    <div class="row text-center">
                         <div class="col-sm-12 ">

                           

                            <!-- {{Form::open(array('url'=>''))}}
                                 
                                 <button  class="btn btn-primary btn-custom-lg" type="submit">Xem thêm</button>   
                                
                            {{Form::close()}}
                            -->                   
                        </div> 
                       

                    </div>
        </div><!--/.container-->
    </section><!--/#home-main-content-->
   
@stop
