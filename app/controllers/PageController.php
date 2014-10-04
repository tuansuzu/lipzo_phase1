<?php

class PageController extends BaseController {


	public function getHome(){	
		$faces = Face::take('4')->get();

		return View::make('home')
			->with('faces',$faces)
			->with('pageName','home-page')
			->with('curFace',null)
			->with('pageTitle','Trang Chủ');					
	}

	public function getFace(){
		
		$faces = Face::paginate(12);

		return View::make('face')
			->with('faces',$faces)
			->with('curFace',null)
			->with('pageName','face-page')
			->with('pageTitle','Bí quyết cười xinh');		
	}

	public function getFacePopup($id,$page,$title){		
		$take = 12;
		$skip = (12 * $page) - 12;
		$faces = Face::take($take)->skip($skip)->get();
		$curFace = Face::find($id);

		return View::make('face_popup')
			->with('faces',$faces)
			->with('curFace',$curFace)
			->with('pageName','face-popup-page')
			->with('pageTitle','Bí quyết cười xinh');	
	}

	public function getHomePopup($id,$title){		
		
		$faces = Face::take('4')->get();
		$curFace = Face::find($id);

		return View::make('home_popup')
			->with('faces',$faces)
			->with('pageName','home-popup-page')
			->with('pageTitle','Trang Chủ')
			->with('curFace',$curFace);
	}

	/*
	public function getFacePopup($id,$title){		
		$faces = Face::all();
		$curFace = Face::find($id);

		return View::make('face_popup')
			->with('faces',$faces)
			->with('curFace',$curFace)
			->with('page','face-popup-page')
			->with('pageTitle','Bí Mật Nụ Cười - Name');		
	}
	*/

	public function getProduct(){		
		return View::make('product')
			->with('pageName','product-page')
			->with('curFace',null)
			->with('pageTitle','Sản Phẩm');		
	}

	public function getTerm(){		
		return View::make('term')
			->with('pageName','term-page')
			->with('pageTitle','Thể Lệ');		
	}


	
}