<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Sport extends Model
{
    protected $table = 'sports';
	protected $primaryKey = 'id';
	public $timestamps=false;
}
