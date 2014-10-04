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
    .user-row {
        margin-bottom: 14px;
    }

    .user-row:last-child {
        margin-bottom: 0;
    }

    .dropdown-user {
        margin: 13px 0;
        padding: 5px;
        height: 100%;
    }

    .dropdown-user:hover {
        cursor: pointer;
    }

    .table-user-information > tbody > tr {
        border-top: 1px solid rgb(221, 221, 221);
    }

    .table-user-information > tbody > tr:first-child {
        border-top: 0;
    }


    .table-user-information > tbody > tr > td {
        border-top: 0;
    }

    .toppad{
        margin-top:20px;
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

<?php

    session_start();

    Sentry::getUser();

    $session_id = Session::getId();

    $_SESSION = Sentry::getUser();

    print_r($_SESSION) ;
?>

<div class="container">

      <div class="row">

        @if(Session::has('topError'))
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                 <div class="alert alert-danger" role="alert">{{Session::get('topError')}}</div>
            </div>
        @endif

        @if(Session::has('success'))
            <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                 <div class="alert alert-success" role="alert">{{Session::get('success')}}</div>
            </div>
        @endif

      <div class="col-md-6 toppad col-md-offset-3">
        <a href="{{URL::to('dang-xuat')}}" class="btn btn-info">Đăng xuất</a>
      </div>

        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
        {{Form::open(array('url'=>'thong-tin-ca-nhan'))}}
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">{{$user->first_name}}</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100" class="img-circle"> </div>
                
               
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Họ tên:</td>
                        <td>{{$user->first_name}}</td>
                      </tr>
                      <tr>
                        <td>Địa chỉ email:</td>
                        <td>{{$user->email}}</td>
                      </tr>
                      <tr>
                        <td>Điện thoại:</td>
                        <td>
                            <span class="profile-text">@if($profile){{$profile->phone}}@else Cập nhật thông tin @endif</span>
                            <input name="phone" type="text" id="phone" class="profile-input" placeholder="@if($profile){{$profile->phone}}@else Cập nhật thông tin @endif">
                        </td>
                      </tr>
                      <tr>
                        <td>CMND:</td>
                        <td>
                            <span class="profile-text">@if($profile){{$profile->id_card}}@else Cập nhật thông tin @endif</span>
                            <input name="id_card" type="text" id="id_card" class="profile-input" placeholder="@if($profile){{$profile->id_card}}@else Cập nhật thông tin @endif">
                        </td>
                      </tr>
                      <tr>
                        <td>Địa chỉ:</td>
                        <td>
                            <span class="profile-text">@if($profile){{$profile->address}}@else Cập nhật thông tin @endif</span>
                            <input name="address" type="text" id="address" class="profile-input" placeholder="@if($profile){{$profile->address}}@else Cập nhật thông tin @endif">
                        </td>
                      </tr>
                    </tbody>
                  </table>
                  
                 
                </div>
              </div>
            </div>
                <div class="panel-footer">  
                  <a href="#" class="btn btn-primary" id="edit">Edit profile</a>
                  <input class="btn btn-primary" type="submit" value="Update profile"></a>
                </div>
            
          </div><!-- /.panel panel-info -->

          {{Form::hidden('id',$user->id)}}
          {{Form::close()}}
        </div><!-- /.col-xs-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->




    {{HTML::script('js/jquery.js')}}
    {{HTML::script('js/bootstrap.min.js')}}
    {{HTML::script('js/main.js')}}
   

    <script type="text/javascript">
        $(document).ready(function() {
            var panels = $('.user-infos');
            var panelsButton = $('.dropdown-user');
            panels.hide();

            //Click dropdown
            panelsButton.click(function() {
                //get data-for attribute
                var dataFor = $(this).attr('data-for');
                var idFor = $(dataFor);

                //current button
                var currentButton = $(this);
                idFor.slideToggle(400, function() {
                    //Completed slidetoggle
                    if(idFor.is(':visible'))
                    {
                        currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
                    }
                    else
                    {
                        currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
                    }
                })
            });


            $('[data-toggle="tooltip"]').tooltip();

            $('button').click(function(e) {
                e.preventDefault();
                alert("This is a demo.\n :-)");
            });

            $('.profile-input').hide();
            $('#edit').click(function(e){
                e.preventDefault();
                $('.profile-input').show();
                $('.profile-text').hide();
                console.log('clicked');
                
            });
        });

    </script>

</body>
</html>
