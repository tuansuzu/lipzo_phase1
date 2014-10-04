<?php

/**
 * Actors model config
 */

return array(

	'title' => 'Secret Smile',

	'single' => 'face',

	'model' => 'Face',

	/**
	 * The display columns
	 */
	'columns' => array(
		'id'=>array(
			'title'=>'#ID'
		),
		'title'=>array(
			'title'=>'#TITLE'
		),
		'cover_image'=>array(
			'title'=>'#COVER IMAGE',
			'output' => '<img src="'. URL::to('/') . '/uploads/small/(:value)" height="50"/>',
		),
		'popup_image'=>array(
			'title'=>'#POPUP IMAGE',
			'output' => '<img src="'. URL::to('/') . '/uploads/small/(:value)" height="50"/>',
		),
		'desc'=>array(
			'title'=>'#DESCRIPTION'
		),

		
    	
	),

	/**
	 * The filter set
	 */
	'filters' => array(	
		'title'=>array(
			'title'=>'Title'
		),
		'desc'=>array(
			'title'=>'Description'
		)
    	
	),

	/**
	 * The editable fields
	 */
	'edit_fields' => array(
		'title'=>array(
			'title'=>'Title',
			'type'=>'text'
		),
		'cover_image' => array(
		    'title' => 'Image',
		    'type' => 'image',
		    'location' => public_path() . '/uploads/originals/',
		    'naming' => 'random',
		    'length' => 20,
		    'size_limit' => 2,
		    'sizes' => array(
			        array(1024, 768, 'crop', public_path() . '/uploads/full/', 90),// can use crop,landscape,fit
			        array(460, 309, 'crop', public_path() . '/uploads/medium/', 90),// can use crop,landscape,fit
			        array(280, 280, 'crop', public_path() . '/uploads/small/', 90)// can use crop,landscape,fit
		    	)

		),
		'popup_image' => array(
		    'title' => 'Image',
		    'type' => 'image',
		    'location' => public_path() . '/uploads/originals/',
		    'naming' => 'random',
		    'length' => 20,
		    'size_limit' => 2,
		    'sizes' => array(
			        array(1024, 768, 'crop', public_path() . '/uploads/full/', 90),// can use crop,landscape,fit
			        array(460, 309, 'crop', public_path() . '/uploads/medium/', 90),// can use crop,landscape,fit
			        array(280, 280, 'crop', public_path() . '/uploads/small/', 90)// can use crop,landscape,fit
		    	)

		),

		'short_desc'=>array(
			'type' => 'textarea',
		    'title' => 'Short Description',
		    'limit' => 100, //optional, defaults to no limit
		    'height' => 80, //optional, defaults to 100
		),
		'desc'=>array(
			'type' => 'wysiwyg',
		    'title' => 'Description'
		)
		
	),
	'sort' => array(
	    'field' => 'id',
	    'direction' => 'asc',
	),
	'permission'=> function()
	{
		//return true;
		//return Auth::user()->hasRole('developer');
		if(Sentry::check()){
			if(Sentry::getUser()->hasAccess('admin')){
				return true;
			}else{
				return Redirect::route('login')
						->with('error','you don\'t have enough priviliges to access that page.');
			}
		}else{
			return Redirect::route('login')
					->with('error','you need to log in first.');
		}
	},
	'form_width' => 480,


);