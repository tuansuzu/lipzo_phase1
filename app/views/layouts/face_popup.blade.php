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
                        <h2>Bí mật</h2>
                        <h1>Nụ cười</h1>
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
                                        <img class="img-responsive img-thumbnail img-circle buzz-out" src="{{URL::to('/')}}/uploads/originals/{{$face->cover_image}}" alt="" >
                                    </a>
                                    <div class="caption">
                                        <h3>{{$face->title}}</h3>
                                        <p class="text-description">{{str_limit($face->desc,50,'...')}}</p>
                                        
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
    @if(Count($curFace))
    <!-- Modal -->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                
                <img id="popup-top" src="{{asset("images/popup-top.png")}}" class="img-responsive hidden-xs">
                <img id="popup-product-top" src="{{asset("images/popup-product-top.png")}}" class="img-responsive">
                
                <div class="modal-content">
                    
                    <div class="modal-header">

                        <div style="height:50px;overflow:hidden"> 
                         <div class="fb-like" data-href="{{Request::url()}}" 
                         data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">{{$curFace->title}}</h4>
                    </div>
                    <div class="modal-body">
                        <div class="popup-image">
                            <img src="{{URL::to('/')}}/uploads/full/{{$curFace->popup_image}}" class="img-responsive">
                        </div>
                        <div class="popup-desc">
                            <p>{{$curFace->desc}}</p>
                        </div>
                    
                    </div>
                    <div class="modal-footer">
                       
                    </div>
                    
                </div><!-- /.modal-content -->

                <img id="popup-bottom" src="{{asset("images/popup-bottom.png")}}" class="img-responsive hidden-xs">
                <img id="popup-product-bottom" src="{{asset("images/popup-product-bottom.png")}}" class="img-responsive">
            </div><!-- /.modal-dialog -->
        </div>
<!-- /.modal -->
<div style="height:50px;overflow:hidden" id="fb-root"></div>
<script type="text/javascript">

(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=441963169188652&version=v2.0";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
</script>
    @endif
@stop
