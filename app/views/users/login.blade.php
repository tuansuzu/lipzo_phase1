<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{$pageTitle}}</title>
    {{HTML::style('css/bootstrap.min.css')}}
    {{HTML::style('css/font-awesome.min.css')}}
    <style type="text/css">
       .form-signin {
          max-width: 400px; 
          display:block;
          background-color: #f7f7f7;
          -moz-box-shadow: 0 0 15px 1px #888;
            -webkit-box-shadow: 0 0 15px 1px #888;
            box-shadow: 0 0 15px 1px #888;
          border-radius:2px;
          margin: 0 auto;
        }
        .main{
            padding: 38px;
        }
        .social-box{
          margin: 0 auto;
          padding: 38px;
          border-bottom:1px #ccc solid;
        }
        .social-box a{
          font-weight:bold;
          font-size:18px;
          padding:8px;
        }
        .social-box a i{
          font-weight:bold;
          font-size:20px;
        }
        .heading-desc{
            font-size:20px;
            font-weight:bold;
            padding:38px 38px 0px 38px;
            
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
          margin-bottom: 10px;
        }
        .form-signin .checkbox {
          font-weight: normal;
        }
        .form-signin .form-control {
          position: relative;
          font-size: 16px;
          height: 20px;
          padding: 20px;
          -webkit-box-sizing: border-box;
             -moz-box-sizing: border-box;
                  box-sizing: border-box;
        }
        .form-signin .form-control:focus {
          z-index: 2;
        }
        .form-signin input[type="text"] {
          margin-bottom: 10px;
          border-radius: 5px;
          
        }
        .form-signin input[type="password"] {
          margin-bottom: 10px;
          border-radius: 5px;
        }
        .login-footer{
            background:#f0f0f0;
            margin: 0 auto;
            border-top: 1px solid #dadada;
            padding:20px;
        }
        .login-footer .left-section a{
            font-weight:bold;
            color:#d2322d;
            line-height:19px;
            display: block;
        }
        .mg-btm{
            margin-bottom:20px;
        }

    </style>


    <!--[if lt IE 9]>
    {{HTML::script('js/html5shiv.js')}}
    {{HTML::script('js/respond.min.js')}}
    <![endif]-->

    <link rel="shortcut icon" href="images/ico/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<div class="container">
    <div class="row">
         @if(Session::has('topError'))
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                 <div class="alert alert-danger" role="alert">{{Session::get('topError')}}</div>
            </div>
        @endif


        {{Form::open(array('url'=>'dang-nhap','class'=>'form-signin mg-btm'))}}
       
        <h3 class="heading-desc">
        <button type="button" class="close pull-right" aria-hidden="true">×</button>
        Đăng nhập</h3>
        <div class="social-box">
            <div class="row mg-btm">
             <div class="col-md-12">
                <a href="{{{ URL::route('facebook') }}}" class="btn btn-primary btn-block">
                  <i class="icon-facebook"></i>    Đăng nhập với Facebook
                </a>
            </div>
            </div>
            
            <div class="row">
            <div class="col-md-12">
                <a href="{{{ URL::route('google') }}}" class="btn btn-info btn-block" >
                  <i class="icon-google"></i>    Đăng nhập với Goggle
                </a>
            </div>
            </div>

        </div>
        <div class="main">  
        
        <input type="text" name="email" class="form-control" placeholder="Địa chỉ email" autofocus>
        <input type="password" name="password" class="form-control" placeholder="Mât khẩu">
         
        <span class="clearfix"></span>  
        </div>
        <div class="login-footer">
        <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <div class="left-section">
                                <a href="{{URL::to('quen-mat-khau')}}">Quên mật khẩu?</a>
                                <a href="{{URL::to('dang-ky')}}">Đăng ký ngay</a>
                            </div>
                        </div>
                        <div class="col-xs-6 col-md-6 pull-right">
                            <button type="submit" class="btn btn-large btn-danger pull-right">Đăng nhập</button>
                        </div>
                    </div>
        
        </div>
      {{Form::close()}}
    </div>
</div>


    {{HTML::script('js/jquery.js')}}
    {{HTML::script('js/bootstrap.min.js')}}
    {{HTML::script('js/main.js')}}
   


</body>
</html>
