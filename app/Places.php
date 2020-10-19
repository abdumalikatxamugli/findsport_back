<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\SportMasterMap;
use App\Sport;

class Places extends Model
{
    protected $table = 'places';
	protected $primaryKey = 'id';
	
	public function sports(){
		$maps=SportMasterMap::where(['master_table'=>'places', 'master_id'=>$this->id])->distinct('sport_id')->get('sport_id')->keyBy('sport_id');
		return $maps;
	}
	public static function get_all_sports(){
		$maps=SportMasterMap::where(['master_table'=>'places'])->distinct('sport_id')->get('sport_id')->pluck('sport_id')->toArray();
		$sports=Sport::find($maps)->all();
		return $sports;
	}
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
