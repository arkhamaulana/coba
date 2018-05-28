<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class crud extends Model
{
    //
	protected $table = 'crud'; 
	protected $primaryKey = 'id'; 
	protected $fillable = ['nama', 'email','deal']; 
	public $timestamps=false;
}
