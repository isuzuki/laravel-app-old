<?php namespace App\Http\Controllers;

class ImageController extends Controller {

	public function getUpload()
	{
		return view('image.upload');
	}

	public function postUpload()
	{
		$image = \Request::file('image');
		if ($image && $image->isValid())
		{
			$image->move('img/uploaded', 'uploaded.png');
		}

		return view('image.upload');
	}

}
