<?php

class AuthController extends \BaseController {

	public function getUserLogin() {		
			return View::make('users.login')
						->with('pageTitle','Đăng nhập');
	}

	public function postUserLogin() {	
			//let's first validate the form
		$validation = Validator::make(Input::all(),User::$login_rules);

		//if the validation fails, return to the index page with first error message

		if($validation->fails()){
			return Redirect::route('user_login')
					->withInput(Input::except('password'))
					->with('topError',$validation->errors()->first());
		}else{
			//if everything looks okay, we try to authenticate the user
			try{
				//set login credentials
				$credentials = array(
					'email'=>Input::get('email'),
					'password'=>Input::get('password')
				);

				if( Input::get('remember') ) {
				    $user = Sentry::authenticateAndRemember($credentials);
				    Session::put('email', Input::get('email'));
				    Session::put('password', Input::get('password'));
				} else {    
					Session::forget('email');
					Session::forget('password');
				    $user = Sentry::authenticate($credentials, false);
				}

				//try to authenticate the user, remember me is set to false
				//$user = Sentry::authenticate($credentials, Input::get('remember'));

				//if everything went okay, we redirect to index route with success message
				return Redirect::to('thong-tin-ca-nhan')
						->with('success','You\' ve successfully logged in!');
			} catch (Cartalyst\Sentry\Users\LoginRequiredException $e) {
				return Redirect::route('user_login')
						-> withInput(Input::except('password'))
						->with('topError','Login field is required.');
			} catch (Cartalyst\Sentry\Users\PasswordRequiredException $e) {
				return Redirect::route('user_login')
						-> withInput(Input::except('password'))
						->with('topError','Password field is required.');
			} catch (Cartalyst\Sentry\Users\WrongPasswordException $e) {
				return Redirect::route('user_login')
						-> withInput(Input::except('password'))
						->with('topError','Wrong password, try again.');
			} catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
				return Redirect::route('user_login')
						-> withInput(Input::except('password'))
						->with('topError','User was not found.');
			} catch (Cartalyst\Sentry\Users\UserNotActivatedException $e) {
				return Redirect::route('user_login')
						-> withInput(Input::except('password'))
						->with('topError','User is not activated.');
			}catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e) {
				return Redirect::route('user_login')
						-> withInput(Input::except('password'))
						->with('topError','User is suspended.');
			} catch (Cartalyst\Sentry\Throttling\UserBannedException $e) {
				return Redirect::route('user_login')
						-> withInput(Input::except('password'))
						->with('topError','User is banned.');
			}
		}
	}


	public function getUserLogout() {
	//we simply log out the user
		Sentry::logout();
		//then, we return to the index route with a success message
		return Redirect::route('user_login')
				->with('page','login')
				->with('pageTitle','Đăng nhập')
				->with('success','You\'ve successfully signed out');
	}

	public function getUserProfile() {
		try
		{
		    // Get the current active/logged in user
		    $user = Sentry::getUser();
		    $profile = Profile::where('user_id','=',$user->id)->first();
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
		    // User wasn't found, should only happen if the user was deleted
		    // when they were already logged in or had a "remember me" cookie set
		    // and they were deleted.
		}
		return View::make('users.profile')
				->with('user',$user)
				->with('profile',$profile)
				->with('page','profile')
				->with('pageTitle','Thông tin cá nhân');
	}

	public function postUserProfile() {
		
		$input = Input::all();

		//let's first validate the form
		$validation = Validator::make($input,Profile::$rules);

		if($validation->passes()){
			$user = User::find(Input::get('id'));
			$profile = Profile::where('user_id','=',$user->id)->first();

			if($profile){			
				$profile->id_card = Input::get('id_card');
				$profile->phone = Input::get('phone');
				$profile->address = Input::get('address');
				$profile->save();

			}else{
				$profile = new Profile(array(
					'id_card'=>Input::get('id_card'),
					'phone'=>Input::get('phone'),
					'address'=>Input::get('address')
				));

				$user->profile()->save($profile);
			}
			

			return Redirect::route('user_profile')
					->with('success','Bạn thay đổi thông tin thành công!');
		}else{
			return Redirect::route('user_profile')
					->withInput()
					->with('topError',$validation->errors()->first());
		}
	}

	public function getUserForgotPassword() {
		return View::make('users.forgot_password')
				->with('page','forgot_password')
				->with('pageTitle','Quên mật khẩu');
	}

	public function postUserForgotPassword() {

		$rules = array('email'=>'required|email');
		$input = Input::all();

		//let's first validate the form
		$validation = Validator::make($input,$rules);

		//if the validation fails, return to the index page with first error message

		if($validation->fails()){
			return Redirect::route('user_forgot_password')
					->with('topError',$validation->errors()->first());

		}else{
			// If you're using our Eloquent models (which we ship with Sentry by default)
			$emptyModelInstance = Sentry::getUserProvider()->getEmptyUser();

			// Now, you have any methods available that you'd like. Retrieve a new instance, query
			// against anything. Because our User model implements the right interfaces, it plays nicely
			// with Sentry.
			$user = $emptyModelInstance->where('email', '=', Input::get('email'))->first();

			// Get the password reset code
    		$resetCode = $user->getResetPasswordCode();

    		// random new password
    		$newPassword = str_random(6);

			Mail::send('emails.reset_password', array( 
				'email'=>Input::get('email'), 
				'resetCode'=>$resetCode,
				'newPassword'=>$newPassword
				),
				function($message){
		        	$message->to(Input::get('email'))->subject('Tạo mật khẩu mới !');
		    });

			return Redirect::route('user_forgot_password')
					->with('success','Bạn vui lòng kiểm tra email để tạo mật khẩu mới');
		}
	}


	public function getUserNewPassword($email,$resetCode) {
		return View::make('users.new_password')
						->with('email',$email)
						->with('resetCode',$resetCode)
						->with('page','new_password')
						->with('pageTitle','Mật khẩu mới');
	}

	public function postUserNewPassword() {
		$email = Input::get('email');
		$resetCode = Input::get('resetCode');
		$newPassword = Input::get('password');
		$rules = array('password'=>'required');
		$input = Input::all();
		
		//let's first validate the form
		$validation = Validator::make($input,$rules);

		

		if($validation->passes()){

			try
			{
			    // If you're using our Eloquent models (which we ship with Sentry by default)
				$emptyModelInstance = Sentry::getUserProvider()->getEmptyUser();

				// Now, you have any methods available that you'd like. Retrieve a new instance, query
				// against anything. Because our User model implements the right interfaces, it plays nicely
				// with Sentry.
				$user = $emptyModelInstance->where('email', '=', $email)->first();

			    // Check if the reset password code is valid
			    if ($user->checkResetPasswordCode($resetCode))
			    {
			        // Attempt to reset the user password
			        if ($user->attemptResetPassword($resetCode, $newPassword))
			        {
			            // Password reset passed
			            try{

							//set login credentials
							$credentials = array(
								'email'=>$email,
								'password'=>$newPassword
							);

							//try to authenticate the user, remember me is set to false
							//$user = Sentry::authenticate($credentials, Input::get('remember'));
							$user = Sentry::authenticate($credentials, false);
							print_r($user);
							//if everything went okay, we redirect to index route with success message
							return Redirect::to('thong-tin-ca-nhan')
									->with('success','You\' ve successfully logged in!');
						} catch (Cartalyst\Sentry\Users\LoginRequiredException $e) {
							return Redirect::route('user_new_password')
									-> withInput(Input::except('password'))
									->with('topError','Login field is required.');
						} catch (Cartalyst\Sentry\Users\PasswordRequiredException $e) {
							return Redirect::route('user_new_password')
									-> withInput(Input::except('password'))
									->with('topError','Password field is required.');
						} catch (Cartalyst\Sentry\Users\WrongPasswordException $e) {
							return Redirect::route('user_new_password')
									-> withInput(Input::except('password'))
									->with('topError','Wrong password, try again.');
						} catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
							return Redirect::route('user_new_password')
									-> withInput(Input::except('password'))
									->with('topError','User was not found.');
						} catch (Cartalyst\Sentry\Users\UserNotActivatedException $e) {
							return Redirect::route('user_new_password')
									-> withInput(Input::except('password'))
									->with('topError','User is not activated.');
						}catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e) {
							return Redirect::route('user_new_password')
									-> withInput(Input::except('password'))
									->with('topError','User is suspended.');
						} catch (Cartalyst\Sentry\Throttling\UserBannedException $e) {
							return Redirect::route('user_new_password')
									-> withInput(Input::except('password'))
									->with('topError','User is banned.');
						}
			        }
			        else
			        {
			            // Password reset failed
			        }
			    }
			    else
			    {
			        // The provided password reset code is Invalid
			    }
			}
			catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
			{
			    echo 'User was not found.';
			}
		}else{
			return Redirect::route('user_new_password')
					->with('topError',$validation->errors()->first());
		}
		
	}


	public function getUserSignup(){
		return View::make('users.signup')
				->with('page','signup')
				->with('pageTitle','Đăng ký');
	}

	public function postUserSignup(){
		$messages = array(
		    'first_name.required' => 'Vui lòng nhập họ tên.',
		    'first_name.min' => 'Họ tên quá ngắn.',
		    'email.required' => 'Vui lòng nhập email.',
		    'email.email' => 'Email không hợp lệ.',
		    'password.required' => 'Vui lòng nhập mật khẩu.',
		    'password.min' => 'Vui lòng nhập mật khẩu hơn 6 ký tự',
		    're_password.required' => 'Vui lòng nhập lại mật khẩu',
		    're_password.same' => 'Mật khẩu không đúng',
		    'terms.required' => 'Vui lòng chấp nhận điều lệ & điều khoản',
		    'terms.required' => 'Vui lòng chấp nhận điều lệ & điều khoản',
		    'user-captcha.required'=>'Vui lòng nhập captcha',
		    'user-captcha.captcha'=>'Captcha không đúng',
		);

		$validation = Validator::make(Input::all(),User::$signup_rules,$messages);


		//Now let's create the user with Sentry 2's create method
		if($validation->passes()){
			$user = Sentry::register(array(
				'first_name'=>Input::get('first_name'),
				'email'=>Input::get('email'),
				'password'=>Input::get('password'),
				'activated'=>0,
				'permissions'=>array(
					'user'=>1
				)
			));

			$activationCode = $user->getActivationCode();

			Mail::send('emails.signup_activation', array(
				'first_name'=>Input::get('first_name'), 
				'email'=>Input::get('email'), 
				'activationCode'=>$activationCode),
				function($message){
		        	$message->to(Input::get('email'), Input::get('first_name'))->subject('Welcome to the lipzo, activation your account !');
		    });

			

			return Redirect::route('user_login')
					->with('success','We\' ve sent you the activation code to your email!');

			//if the validation failed, let's return the user
			//to the signup form with the first error message
		}else{
			return Redirect::route('user_signup')
					->withInput(Input::except('password','re_password'))
					->with('error',$validation->errors()->first());
		}
	}

	public function getUserActivation($email,$code){
		// If you're using our Eloquent models (which we ship with Sentry by default)
		$emptyModelInstance = Sentry::getUserProvider()->getEmptyUser();

		// Now, you have any methods available that you'd like. Retrieve a new instance, query
		// against anything. Because our User model implements the right interfaces, it plays nicely
		// with Sentry.
		$user = $emptyModelInstance->where('email', '=', $email)->first();

		// Continue on as you were...
		try
		{
		    // Find the user using the user id
		    //$user = Sentry::findUserById(1);

		    // Attempt to activate the user
		    if ($user->attemptActivation($code))
		    {
		        return Redirect::to('/')
					->with('success','You\' ve logged in successfully!');
		    }
		    else
		    {
		        // User activation failed
		    }
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
		    echo 'User was not found.';
		}
		catch (Cartalyst\Sentry\Users\UserAlreadyActivatedException $e)
		{
		    echo 'User is already activated.';
		}
	}

	public function loginWithGoogle() {
 
        // get data from input
        $code = Input::get( 'code' );
 
        // get google service
        $googleService = OAuth::consumer( 'Google' );
 
        // check if code is valid
 
        // if code is provided get user data and sign in
        if ( !empty( $code ) ) {
 
            // This was a callback request from google, get the token
            $token = $googleService->requestAccessToken( $code );
 
            // Send a request with it
            $result = json_decode( $googleService->request( 'https://www.googleapis.com/oauth2/v1/userinfo' ), true );
 
            if(!empty($token)){
 
                try{
                    // Find the user using the user id
                    $user = Sentry::findUserByLogin($result['email']);
 
                    // Log the user in
                    Sentry::login($user, false);
 
                    return Redirect::to('http://127.0.0.1/lipzo/thong-tin-ca-nhan');
                }
                catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
                {
                    // Register the user
                    $user = Sentry::register(array(
                        'activated' =>  1,
                        'email'      => $result['email'],
                        'password'   => Hash::make(uniqid(time())),
                        'first_name' => $result['name'],
                        'permissions'=>array(
							'user'=>1
						)
                        //'avatar'   => $result['picture'],
                        //'country'   => (!empty($result['location'])) ? $result['location'] : false
                    ));
 
                   
                    Sentry::login($user, false);
 
                    return Redirect::to('http://127.0.0.1/lipzo/thong-tin-ca-nhan');
                }
 
            }
 
        }
        // if not ask for permission first
        else {
            // get googleService authorization
            $url = $googleService->getAuthorizationUri();
 
            // return to google login url
            return Redirect::to( (string)$url );
        }
    }


    public function loginWithFacebook() {

	    // get data from input
	    $code = Input::get( 'code' );

	    // get fb service
	    $fb = OAuth::consumer( 'Facebook' );

	    // check if code is valid

	    // if code is provided get user data and sign in
	    if ( !empty( $code ) ) {


	        // This was a callback request from facebook, get the token
	        $token = $fb->requestAccessToken( $code );

	        // Send a request with it
	        $result = json_decode( $fb->request( '/me' ), true );

	        if(!empty($token)){
 
                try{
                    // Find the user using the user id
                    $user = Sentry::findUserByLogin($result['email']);
 
                    // Log the user in
                    Sentry::login($user, false);
 
                    return Redirect::to('http://127.0.0.1/lipzo/thong-tin-ca-nhan');
                }
                catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
                {
                    // Register the user
                    $user = Sentry::register(array(
                        'activated' =>  1,
                        'email'      => $result['email'],
                        'password'   => Hash::make(uniqid(time())),
                        'first_name' => $result['name'],
                        'permissions'=>array(
							'user'=>1
						)
                        //'avatar'   => $result['picture'],
                        //'country'   => (!empty($result['location'])) ? $result['location'] : false
                    ));
 
                   
                    Sentry::login($user, false);
 
                    return Redirect::to('http://127.0.0.1/lipzo/thong-tin-ca-nhan');
                }
 
            }
	       
	        //Var_dump
	        //display whole array().
	        //dd($result);

	    }
	    // if not ask for permission first
	    else {
	        // get fb authorization
	        $url = $fb->getAuthorizationUri();

	        // return to facebook login url
	         return Redirect::to( (string)$url );
	    }

	}


	// Admin login & logout
	public function postLogin(){
		//let's first validate the form
		$validation = Validator::make(Input::all(),User::$login_rules);

		//if the validation fails, return to the index page with first error message

		if($validation->fails()){
			return Redirect::route('login')
					->withInput(Input::except('password'))
					->with('topError',$validation->errors()->first());
		}else{
			//if everything looks okay, we try to authenticate the user
			try{
				//set login credentials
				$credentials = array(
					'email'=>Input::get('email'),
					'password'=>Input::get('password')
				);

				if( Input::get('remember') ) {
				    $user = Sentry::authenticateAndRemember($credentials);
				    Session::put('email', Input::get('email'));
				    Session::put('password', Input::get('password'));
				} else {    
					Session::forget('email');
					Session::forget('password');
				    $user = Sentry::authenticate($credentials, false);
				}

				//try to authenticate the user, remember me is set to false
				//$user = Sentry::authenticate($credentials, Input::get('remember'));

				//if everything went okay, we redirect to index route with success message
				return Redirect::to('admin')
						->with('success','You\' ve successfully logged in!');
			} catch (Cartalyst\Sentry\Users\LoginRequiredException $e) {
				return Redirect::route('login')
						-> withInput(Input::except('password'))
						->with('topError','Login field is required.');
			} catch (Cartalyst\Sentry\Users\PasswordRequiredException $e) {
				return Redirect::route('login')
						-> withInput(Input::except('password'))
						->with('topError','Password field is required.');
			} catch (Cartalyst\Sentry\Users\WrongPasswordException $e) {
				return Redirect::route('login')
						-> withInput(Input::except('password'))
						->with('topError','Wrong password, try again.');
			} catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
				return Redirect::route('login')
						-> withInput(Input::except('password'))
						->with('topError','User was not found.');
			} catch (Cartalyst\Sentry\Users\UserNotActivatedException $e) {
				return Redirect::route('login')
						-> withInput(Input::except('password'))
						->with('topError','User is not activated.');
			}catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e) {
				return Redirect::route('login')
						-> withInput(Input::except('password'))
						->with('topError','User is suspended.');
			} catch (Cartalyst\Sentry\Throttling\UserBannedException $e) {
				return Redirect::route('login')
						-> withInput(Input::except('password'))
						->with('topError','User is banned.');
			}
		}

	}


	public function getLogout() {
	//we simply log out the user
		Sentry::logout();
		
		//then, we return to the index route with a success message
		return Redirect::to('/')
				->with('success','You\'ve successfully signed out');
	}


	public function getLogin() {
			
			return View::make('cms.login')
						->with('pageTitle','CMS Login');	
	
	}


	


}
