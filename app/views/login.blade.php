@include('layouts.header')



<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
          <div class="divide60"></div>
            <h1 class="text-center login-title">Sign in to CMS</h1>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">

                {{ Form::open(array('url' => 'login','class' => 'form-signin')) }}

               
                <input type="text" value="@if(Session::has('email')){{Session::get('email')}}@endif" name="email" class="form-control" placeholder="Email" required autofocus>
                <input type="password" value="@if(Session::has('password')){{Session::get('password')}}@endif" name="password" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                <label class="checkbox">
                    <input type="checkbox" name="remember" value="1"><span>Remember me</span>
                </label>
               
             

                {{Form::close()}}
            </div>
          
        </div>
    </div>
</div>



@include('layouts.footer')