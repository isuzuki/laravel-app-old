<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'artist';

	public function discographies()
	{
		return $this->hasMany('App\Models\Discography');
	}

	public function musics()
	{
		return $this->hasManyThrough('App\Models\Music', 'App\Models\Discography');
	}
}
