<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prset extends Model
{
    protected $table = 'prset';
	protected $primaryKey = 'id';
    public $timestamps=false;
}
