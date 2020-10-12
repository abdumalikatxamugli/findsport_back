<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MediaMap extends Model
{
    protected $table = 'media_master_map';
	protected $primaryKey = 'id';
	public $timestamps=false;
}
