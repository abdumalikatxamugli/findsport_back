<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Section extends Model
{
    protected $table = 'sections';
	protected $primaryKey = 'id';
	public $timestamps=false;

	public function get_min_price(){
		$price_array=json_decode($this->price);
		$min=1000000;
		foreach ($price_array as $index => $price_all) {
			if($price_all->price!=null){
				if($price_all->price<$min){
					$min=$price_all->price;
				}
			}
		}
		return $min;
	}
}
