
@extends('layouts.main')

@section('content')

   <section id="home-main-banner">
          <div class="container">
            <div class="row">
                <div class="col-sm-6 text-center">
                    <div class="video-section">
                        <img src="{{asset("images/lipzo-logo-big.png")}}">
                        <h1 class="text-shadow">Cười tỏa diệu kỳ</h1>
                     
                        
                        @if(BrowserDetect::isDesktop())
                            <video id="vid1" style="display:none" class="video-js vjs-default-skin shadow" controls preload="auto" width="360" height="200"></video>
                        @endif

                        @if(BrowserDetect::isTablet())
                            <div id="youtube1">
                                <iframe class="shadow" width="360" height="200" src="https://www.youtube.com/watch?v=6hTZgcN2oQk&feature=youtu.be?controls=2&modestbranding=1&rel=0&showinfo=0" 
                            frameborder="0" allowfullscreen></iframe>
                            </div>
                        @endif


                        @if(BrowserDetect::isMobile())                          
                            <div id="youtube1">
                                <iframe class="shadow" width="360" height="200" src="https://www.youtube.com/watch?v=6hTZgcN2oQk&feature=youtu.be?controls=2&modestbranding=1&rel=0&showinfo=0" 
                            frameborder="0" allowfullscreen></iframe>
                            </div>
                        @endif

                        <p class="video-text">Xem Video “Tìm lại nụ cười kỳ diệu” từ Lipzo và sẵn sàng đi tìm nụ cười hồn nhiên, lan toả diệu kì của chính bạn!</p>
                    </div><!--/#video-section-->
                </div>
               <div class="col-sm-6">
                    <div class="picture-section">
                        <img id="couple" src="{{asset("images/home-banner-top-picture-no-star.png")}}" class="top-picture">
                        <img src="{{asset("images/home-banner-top-picture-no-star-glow.png")}}" class="glowing hidden-xs hidden-sm">
                        <img src="{{asset("images/small-star.png")}}" class="small-star hidden-xs hidden-sm">
                        <img src="{{asset("images/big-star.png")}}" class="big-star hidden-xs hidden-sm">
                    </div><!--/#picture-section-->
                </div>
            </div>
            
            <div class="countdown-container">
                  <span class="hidden-xs">Chỉ còn</span>
                <div class="clock">               
                        <div class="clock-item clock-days countdown-time-value">
                            <div class="wrap">
                                <div class="inner">
                                    <div id="canvas-days" class="clock-canvas"></div>

                                    <div class="text">
                                        <p class="val">0</p>
                                        <p class="type-days type-time">Ngày  </p>
                                    </div><!-- /.text -->
                                </div><!-- /.inner -->
                            </div><!-- /.wrap -->
                        </div><!-- /.clock-item -->

                        <div class="clock-item clock-hours countdown-time-value">
                            <div class="wrap">
                                <div class="inner">
                                    <div id="canvas-hours" class="clock-canvas"></div>

                                    <div class="text">
                                        <p class="val">0</p>
                                        <p class="type-hours type-time">Giờ </p>
                                    </div><!-- /.text -->
                                </div><!-- /.inner -->
                            </div><!-- /.wrap -->
                        </div><!-- /.clock-item -->

                        <div class="clock-item clock-minutes countdown-time-value">
                            <div class="wrap">
                                <div class="inner">
                                    <div id="canvas-minutes" class="clock-canvas"></div>

                                    <div class="text">
                                        <p class="val">0</p>
                                        <p class="type-minutes type-time">Phút</p>
                                    </div><!-- /.text -->
                                </div><!-- /.inner -->
                            </div><!-- /.wrap -->
                        </div><!-- /.clock-item -->

                        <div class="clock-item clock-seconds countdown-time-value">
                            <div class="wrap">
                                <div class="inner">
                                    <div id="canvas-seconds" class="clock-canvas"></div>

                                    <div class="text">
                                        <p class="val">0</p>
                                        <p class="type-seconds type-time">Giây</p>
                                    </div><!-- /.text -->
                                </div><!-- /.inner -->
                            </div><!-- /.wrap -->
                        </div><!-- /.clock-item -->
                    </div><!-- /.clock -->
                </div><!-- /.countdown-container -->

          </div><!-- /.container -->

    </section><!--/#home-main-banner -->


    <section id="home-main-content">
        <div class="container">

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="headline-ribbon">
                                <h3>Chương trình “Bí kíp cười toả diệu kì” chính thức diễn ra</h3>
                                <p>Quay lại website để khám phá và nhận nhiều phần quà hấp dẫn.   </p>
                            </div>                          
                        </div>
                    </div>

                    <div class="row">
                        <div class="headline-text">
                            <div class="col-sm-4">
                                <h2>BÍ MẬT NỤ CƯỜI</h2>                    
                            </div>
                            <div class="col-sm-8">
                                    <p>Từ ngày 6/10, cuộc thi “Bí kíp cười toả diệu kì” sẽ chính thức diễn ra. Trong lúc chờ đợi, hãy cùng Lipzo khám phá những thông tin thú vị về nụ cười cũng như “bí kíp” để có nụ cười hoàn hảo nhất! 
                                    </p>                
                            </div>
                        </div>
                    </div>

                    <div class="row">

                    @if(Count($faces))
                        @foreach($faces as $face)
                        <div class="col-xs-6 col-sm-4 col-md-3">
                             <div class="thumbnail">
                                <a href="{{URL::to('cuoitoadieuky')}}/{{$face->id}}/{{Str::slug($face->title)}}" >
                                    <img class="img-responsive img-thumbnail img-circle glow-red" src="{{URL::to('/')}}/uploads/originals/{{$face->cover_image}}" alt="" >
                                </a>
                                <div class="caption">
                                    <h3>{{$face->title}}</h3>
                                    <p class="text-description">{{$face->short_desc}}...</p>
                                  
                                </div>
                            </div>
                        </div>

                        @endforeach

                    @endif            
                        
                    </div><!-- /.row -->

                    <div class="top30"></div>

                    <div class="row text-center">
                         <div class="col-sm-12 ">
                            <a href="{{URL::to('cuoitoadieuky/bi-quyet-cuoi-xinh')}}" class="btn btn-primary btn-custom-lg" type="button">Tìm hiểu thêm</a>
                        </div> 
                    </div>
        </div><!--/.container-->
    </section><!--/#home-main-content-->

    <section id="home-product">
        <div class="container">
            <div class="row text-center">
                <div class="col-sm-7 col-md-7">
                    <div class="video-section">
                        <div class="media">
                           
                            <img src="{{asset("images/lipzo-logo-big.png")}}" class="media-object img-responsive" alt="lipzo logo">
                          
                            <div class="media-body">
                                <h3 class="text-shadow">Công nghệ Blooming Floss<br/>
                                    bung tỏa triệu sợi tơ mềm
                                </h3>
                            </div>
                        </div><!--/.media--> 
                                         
                        @if(BrowserDetect::isDesktop())
                            <video id="vid2" style="display:none" class="video-js vjs-default-skin shadow" controls preload="auto" width="360" height="200"></video>
                        @endif
                         
                        @if(BrowserDetect::isTablet())
                            <div id="youtube2">
                                <iframe class="shadow" width="360" height="200" src="https://www.youtube.com/watch?v=jbNMhce5MZU?controls=2&modestbranding=1&rel=0&showinfo=0" 
                            frameborder="0" allowfullscreen></iframe>
                            </div>
                        @endif

                        @if(BrowserDetect::isMobile())                          
                            <div id="youtube2">
                                <iframe class="shadow" width="360" height="200" src="https://www.youtube.com/watch?v=jbNMhce5MZU?controls=2&modestbranding=1&rel=0&showinfo=0" 
                            frameborder="0" allowfullscreen></iframe>
                            </div>
                        @endif

                    </div><!--/.video-section--> 
                   
                                                               
                </div><!--/.col-sm-7--> 

                <div class="col-sm-5 col-md-5">
                    
                    <div class="picture-section">
                        <img src="{{asset("images/home-banner-bottom-picture-no-star.png")}}" class="bottom-picture hidden-xs">
                        <img src="{{asset("images/small-star.png")}}" class="small-star hidden-xs hidden-sm" >
                        <img src="{{asset("images/big-star.png")}}" class="big-star hidden-xs hidden-sm">
                    </div><!--/#picture-section-->
                    
                     <a href="{{URL::to('cuoitoadieuky/san-pham')}}" class="btn btn-primary btn-custom-lg learn-more" type="button">Tìm hiểu thêm</a>                           
                </div><!--/.col-sm-5 col-md-5--> 

            </div><!--/.row-->  
        </div><!--/.container-->  

    </section><!--/#home-product-->

@stop

