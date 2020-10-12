<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Places extends Model
{
    protected $table = 'places';
	protected $primaryKey = 'id';
	

	public function get_min_price(){
		$price_week_array=json_decode($this->price, true);
		$min=1000000;
		foreach ($price_week_array as $day => $price_day_array) {
			foreach ($price_day_array as $hour => $price) {
				if($price!=null){
					if($price<$min){
						$min=$price;
					}
				}
			}
		}
		return $min;
	}
}
