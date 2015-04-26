<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('ArtistTableSeeder');
		$this->call('DiscographyTableSeeder');
		$this->call('MusicTableSeeder');
	}

}

use App\Models\Artist;

class ArtistTableSeeder extends Seeder {

	public function run()
	{
		Artist::create(['name' => 'artist1']);
		Artist::create(['name' => 'artist2']);
	}
}

use App\Models\Discography;

class DiscographyTableSeeder extends Seeder {

	public function run()
	{
		Discography::create([
			'name' => 'disc1',
			'artist_id' => '1',
		]);
		Discography::create([
			'name' => 'disc2',
			'artist_id' => '1',
		]);
		Discography::create([
			'name' => 'artist2-disc1',
			'artist_id' => '2',
		]);
	}
}

use App\Models\Music;

class MusicTableSeeder extends Seeder {

	public function run()
	{
		Music::create([
			'name' => 'track1',
			'discography_id' => '1',
		]);
		Music::create([
			'name' => 'track2',
			'discography_id' => '1',
		]);
		Music::create([
			'name' => 'track1',
			'discography_id' => '2',
		]);
	}
}
