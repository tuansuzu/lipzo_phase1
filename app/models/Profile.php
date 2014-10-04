<?php

class Profile extends Eloquent {

	protected $fillable = array('id_card','phone','address');

	public static $rules = array
	(
		'id_card' => 'required|max:50',
		'phone'=>'required|max:50',
		'address'=>'required|max:255'
	);

	public function user()
	{
		return $this->belongsTo('User');
	}


}