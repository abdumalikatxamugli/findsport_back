<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Clubs extends Model
{
    protected $table = 'clubs';
	protected $primaryKey = 'id';
	public $timestamps=false;
	
	
}
