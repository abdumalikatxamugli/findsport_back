<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\SportMasterMap;
use App\Sport;

class Section extends Model
{
    protected $table = 'sections';
	protected $primaryKey = 'id';
	public $timestamps=false;
	public function sports(){
		$maps=SportMasterMap::where(['master_table'=>'sections', 'master_id'=>$this->id])->distinct('sport_id')->get('sport_id')->keyBy('sport_id');
		return $maps;
	}
	public static function get_all_sports(){
		$maps=SportMasterMap::where(['master_table'=>'sections'])->distinct('sport_id')->get('sport_id')->pluck('sport_id')->toArray();
		$sports=Sport::find($maps)->all();
		return $sports;
	}
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
