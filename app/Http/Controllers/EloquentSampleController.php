<?php namespace App\Http\Controllers;

use App\Models\Artist;
use App\Models\Discography;

class EloquentSampleController extends Controller {

	public function basic(Artist $artist)
	{
		$artist->find(1);

		return view('sample.eloquent.basic', [
			'artist' => $artist->find(1),
		]);
	}

	public function eager(Discography $discography)
	{
		return view('sample.eloquent.eager', [
			'discography' => $discography,
		]);
	}
}
