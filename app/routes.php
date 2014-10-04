<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/*
Route::get('ajax',function(){
	if(Request::ajax()){
		$faces = Face::find('1');
		return $faces;
	}
});

Route::post('ajax',function(){
	if(Request::ajax()){
		$take = Input::get('take');
		$skip = Input::get('skip');
		$offset = Input::get('offset');
		$count = Face::count();
		$remain = $count - $offset;
		$dataArray=[];

		if($remain > 1){
			$faces = Face::take($take)->offset($offset)->get();
			foreach ($faces as $face)
			{
			    $dataArray[] = array('title'=>$face->title, 'ok'=>true,'remain'=>$remain);
			}
			
			return Response::json($dataArray);
			  
		}else{
			
			$faces = Face::take($remain)->offset($offset)->get();
			foreach ($faces as $face)
			{
			    $dataArray[] = array('title'=>$face->title, 'ok'=>false);
			}
			return Response::json($dataArray);
			  
		}			
		
	}
});

Route::get('ajax-page',function(){
	$faces = Face::take(1)->skip(0)->get();
	$count = Face::count();
	return View::make('ajax')
				->with('faces',$faces)
				->with('count',$count)
				->with('ok',true);
});



Route::post('cuoitoadieuky/ajax',function(){

	if(Request::ajax()){

		$take = Input::get('take');
		$skip = Input::get('skip');
		$offset = Input::get('offset');
		$count = Face::count();
		$remain = $count - $skip;
		$dataArray=[];

		
		if($remain > $take){
			$faces = Face::take($take)->skip($skip)->get();
			$skip = 9;
			foreach ($faces as $face)
			{	
			    $dataArray[] = array('id'=>$face->id,'title'=>$face->title,'desc'=>$face->desc,'cover_image'=>$face->cover_image, 'ok'=>true,'take'=>$take,'skip'=>$skip,'remain'=>$remain);
			}
			
			return Response::json($dataArray);
			  
		}else{
			
			$faces = Face::take($remain)->skip($skip)->get();
			$skip = Face::count() + 1;

			foreach ($faces as $face)
			{
			    $dataArray[] = array('id'=>$face->id,'title'=>$face->title,'desc'=>$face->desc,'cover_image'=>$face->cover_image, 'ok'=>false,'take'=>$take,'skip'=>$skip,'remain'=>$remain);
			}
			return Response::json($dataArray);
			  
		}			
		
	}
});

*/

Route::get('/',function(){
	return Redirect::to('cuoitoadieuky');
});

Route::get('cuoitoadieuky',array(
	'as'=>'cuoitoadieuky',
	'uses'=>'PageController@getHome'
));

Route::get('cuoitoadieuky/bi-quyet-cuoi-xinh',array(
	'as'=>'cuoitoadieuky/bi-quyet-cuoi-xinh',
	'uses'=>'PageController@getFace'
));

Route::get('cuoitoadieuky/bi-quyet-cuoi-xinh/{id}/{page}/{title}',array(
	'as'=>'cuoitoadieuky/bi-quyet-cuoi-xinh/id/page/title',
	'uses'=>'PageController@getFacePopup'
));

Route::get('cuoitoadieuky/{id}/{title}',array(
	'as'=>'cuoitoadieuky/id/title',
	'uses'=>'PageController@getHomePopup'
));

Route::get('cuoitoadieuky/san-pham',array(
	'as'=>'cuoitoadieuky/san-pham',
	'uses'=>'PageController@getProduct'
));

/*

Route::get('cuoitoadieukybeta/thele',array(
	'as'=>'cuoitoadieukybeta/thele',
	'uses'=>'PageController@getTerm'
));



Route::get('create_user',function(){
	$user = Sentry::getUserProvider()->create(array(
		'email'=>'admin@admin.com',
		'password'=>'password',
		'first_name'=>'tuan',
		'last_name'=>'bui',
		'activated'=>1,
		'permissions'=>array(
			'admin'=>1
		)
	));
	return 'admin created with id of '.$user->id;
});

*/
//Auth Resource
/*
Route::get('signup',array(
	'as'=>'signup_form',
	'before'=>'is_quest',
	'uses'=>'AuthController@getSignup'
));

Route::post('signup',array(
	'as'=>'signup_form_post',
	'before'=>'csrf|is_quest',
	'uses'=>'AuthController@postSignup'
));
*/


/*
Route::get('create_user',function(){
	$user = Sentry::getUserProvider()->create(array(
		'email'=>'cuoitoadieuky@lipzo.com',
		'password'=>'circus@digital',
		'first_name'=>'admin',
		'last_name'=>'amin',
		'activated'=>1,
		'permissions'=>array(
			'admin'=>1
		)
	));
	return 'admin created with id of '.$user->id;
});

*/


// CMS login & log out
Route::get('login',array(
	'as'=>'login',
	'before'=>'is_quest',
	'uses'=>'AuthController@getLogin'
));


Route::post('login',array(
	'as'=>'login_post',
	'before'=>'csrf|is_quest',
	'uses'=>'AuthController@postLogin'
));


Route::get('logout',array(
	'as'=>'logout',
	'before'=>'user',
	'uses'=>'AuthController@getLogout'
));


/*

// User login 
Route::get('dang-nhap',array(
    'as'=>'user_login',
    'before'=>'is_quest',
    'uses'=>'AuthController@getUserLogin'
));


Route::post('dang-nhap',array(
    'as'=>'user_login_post',
    'before'=>'csrf|is_quest',
    'uses'=>'AuthController@postUserLogin'
));


Route::get('dang-xuat',array(
    'as'=>'user_logout',
    'before'=>'user',
    'uses'=>'AuthController@getUserLogout'
));

Route::get('google', array('as' => 'google', 'uses' => 'AuthController@loginWithGoogle'));

Route::get('facebook', array('as' => 'facebook', 'uses' => 'AuthController@loginWithFacebook'));

// User signup
Route::get('dang-ky',array(
    'as'=>'user_signup',
    'before'=>'is_quest',
    'uses'=>'AuthController@getUserSignup'
));

Route::post('dang-ky',array(
    'as'=>'user_signup_post',
    'before'=>'csrf|is_quest',
    'uses'=>'AuthController@postUserSignup'
));

// User activation
Route::get('activation/{email}/{code}',array(
    'as'=>'user_activation',
    'before'=>'is_quest',
    'uses'=>'AuthController@getUserActivation'
));

// User profile
Route::get('thong-tin-ca-nhan',array(
    'as'=>'user_profile',
    'before'=>'user',
    'uses'=>'AuthController@getUserProfile'
));

Route::post('thong-tin-ca-nhan',array(
    'as'=>'user_profile_post',
    'before'=>'csrf|user',
    'uses'=>'AuthController@postUserProfile'
));

// User forgot password
Route::get('quen-mat-khau',array(
    'as'=>'user_forgot_password',
    'before'=>'is_quest',
    'uses'=>'AuthController@getUserForgotPassword'
));

Route::post('quen-mat-khau',array(
    'as'=>'user_forgot_password_post',
    'before'=>'csrf|is_quest',
    'uses'=>'AuthController@postUserForgotPassword'
));

Route::get('mat-khau/{email}/{resetCode}',array(
    'as'=>'user_new_password',
    'before'=>'is_quest',
    'uses'=>'AuthController@getUserNewPassword'
));

Route::post('mat-khau',array(
    'as'=>'user_new_password_post',
    'before'=>'csrf|is_quest',
    'uses'=>'AuthController@postUserNewPassword'
));


*/



App::error(function($exception, $code)
{
    switch ($code)
    {
        case 403:
            return Response::view('errors.403', array(), 403);

        case 404:
            return Response::view('errors.404', array(), 404);

        case 500:
            return Response::view('errors.500', array(), 500);

        default:
            return Response::view('errors.default', array(), $code);
    }
});
