<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Music extends Model{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'musics';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'singer_id', 'duration', 'price'];
	
	public function singer(){
		return $this->belongsTo('App\Singer');
	}
}
