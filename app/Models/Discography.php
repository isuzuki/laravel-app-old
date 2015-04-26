<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discography extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'discography';

	public function artist()
	{
		return $this->belongsTo('App\Models\Artist');
	}

	public function musics()
	{
		return $this->hasMany('App\Models\Music');
	}
}
