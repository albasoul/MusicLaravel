<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Singer extends Model{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'singers';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'lastname', 'email'];
	
	public function musics(){
		return $this->hasMany('App\Music');
	}
	public function albums(){
		return $this->hasMany('App\Album');
	}
}
