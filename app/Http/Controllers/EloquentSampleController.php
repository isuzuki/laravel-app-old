<?php namespace App\Http\Controllers;

use App\Models\Artist;

class EloquentSampleController extends Controller {

	public function basic(Artist $artist)
	{
		$artist->find(1);

		return view('sample.eloquent.basic', [
			'artist' => $artist->find(1),
		]);
	}

}
