<?php

class Face extends Eloquent {

	protected $fillable = array('title','cover_image','popup_image','short_desc','desc');

	public static $rules = array
	(
		'title' => 'required|min:5|max:100',
		'cover_image'=>'required',
		'popup_image'=>'required',
		'short_desc' => 'required|min:10|max:100',
		'desc' => 'required|min:10|max:500'
	);

	public function user()
	{
		return $this->belongsTo('User');
	}



}