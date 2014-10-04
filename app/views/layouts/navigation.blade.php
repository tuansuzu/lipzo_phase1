
<header id="header">
        <div class="container">
            <div id="navbar" class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{URL::to('cuoitoadieuky')}}"></a>
                    <ul class="top-nav-social">
                        <li><a href="https://www.facebook.com/lipzovn" target="_blank"><i class="fa fa-facebook icon-social"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCqJmGCkRxKIluzXuPZjaUBQ" target="_blank"><i class="fa fa-youtube icon-social"></i></a></li>
                    </ul>
                </div>
                <div class="collapse navbar-collapse text-center no-transition">
                    <ul class="nav navbar-nav">
                        <li @if($pageName == 'home-page' || $pageName == 'home-popup-page')class="active" @endif><a href="{{URL::to('cuoitoadieuky')}}">Trang chủ</a></li>
                        <li @if($pageName == 'face-page' || $pageName == 'face-popup-page')class="active" @endif><a href="{{URL::to('cuoitoadieuky/bi-quyet-cuoi-xinh')}}">Bí quyết cười xinh</a></li>
                        <li @if($pageName == 'product-page')class="active" @endif><a href="{{URL::to('cuoitoadieuky/san-pham')}}">Sản phẩm</a></li>
                        <!-- <li><a href="{{URL::to('cuoitoadieukybeta/thele')}}">Thể lệ</a></li> -->
                    </ul>
                </div>
               
            </div>
        </div>
    </header><!--/#header-->

