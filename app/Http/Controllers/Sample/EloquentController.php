<?php namespace App\Http\Controllers\Sample;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use App\Models\Discography;

class EloquentController extends Controller {

	public function basic(Artist $artist)
	{
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
