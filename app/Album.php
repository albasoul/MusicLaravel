<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model{
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'albums';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['singer_id', 'name', 'image', 'date', 'price'];
	
	public function singer(){
		return $this->belongsTo('App\Singer');
	}
}
