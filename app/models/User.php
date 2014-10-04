<?php

class User extends Cartalyst\Sentry\Users\Eloquent\User {


	public static $signup_rules = array(
		'first_name'=>'required|min:2',
		'email'=>'required|email|unique:users',
		'password'=>'required|min:6',
		're_password'=>'required|same:password',
		'terms'=>'required',
		'user-captcha' => 'required|captcha'

	);

	public static $login_rules = array(
		'email'=>'required|email|exists:users',
		'password'=>'required|min:6'
	);

	public function face()
    {
        return $this->hasOne('Face');
    }

    public function profile()
    {
        return $this->hasOne('Profile','user_id');
    }
}