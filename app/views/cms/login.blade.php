
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
    {{HTML::style('css/cms.css')}}


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
    

    <div class="omb_login">
        <!-- <h3 class="omb_authTitle">Login or <a href="#">Sign up</a></h3>
        <div class="row omb_row-sm-offset-3 omb_socialButtons">
            <div class="col-xs-4 col-sm-2">
                <a href="#" class="btn btn-lg btn-block omb_btn-facebook">
                    <i class="fa fa-facebook visible-xs"></i>
                    <span class="hidden-xs">Facebook</span>
                </a>
            </div>
            <div class="col-xs-4 col-sm-2">
                <a href="#" class="btn btn-lg btn-block omb_btn-twitter">
                    <i class="fa fa-twitter visible-xs"></i>
                    <span class="hidden-xs">Twitter</span>
                </a>
            </div>  
            <div class="col-xs-4 col-sm-2">
                <a href="#" class="btn btn-lg btn-block omb_btn-google">
                    <i class="fa fa-google-plus visible-xs"></i>
                    <span class="hidden-xs">Google+</span>
                </a>
            </div>  
        </div> 

        <div class="row omb_row-sm-offset-3 omb_loginOr">
            <div class="col-xs-12 col-sm-6">
                <hr class="omb_hrOr">
                <span class="omb_spanOr">or</span>
            </div>
        </div> -->
        {{ Form::open(array('url' => 'login','class' => 'omb_loginForm')) }}

        <div class="row omb_row-sm-offset-3">
            <div class="col-xs-12 col-sm-6">    

                
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                        <input type="text" value="@if(Session::has('email')){{Session::get('email')}}@endif" name="email" class="form-control" placeholder="Email" required autofocus>
                    </div>
                    <span class="help-block"></span>
                                        
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                        <input type="password" value="@if(Session::has('password')){{Session::get('password')}}@endif" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <span class="help-block">
                        @if(Session::has('topError'))
                            {{Session::get('topError')}}
                        @endif
                    </span>

                    <button class="btn btn-lg btn-primary btn-block pomegranate" type="submit">Login</button>
                </form>
            </div>
        </div><!-- /.row omb_row-sm-offset-3 -->  

        <div class="row omb_row-sm-offset-3">
            <!--
            <div class="col-xs-12 col-sm-3">
                <label class="checkbox">
                    <input type="checkbox" name="remember" value="1">Remember Me
                </label>
            </div>
            
            <div class="col-xs-12 col-sm-3">
                <p class="omb_forgotPwd">
                    <a href="#">Forgot password?</a>
                </p>
            </div>
            -->
        </div><!-- /.row omb_row-sm-offset-3 --> 

        {{FORM::close()}}
    </div><!-- /.omb_login -->

</div><!-- /.container -->



    {{HTML::script('js/jquery.js')}}
    {{HTML::script('js/bootstrap.min.js')}}
    

  

</body>
</html>