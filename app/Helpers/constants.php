<?
	class Constants{
		public static function show($key, $lang){
			$constants=[
				'order'=>[
					'uz'=>'Buyurtma berish',
					'ru'=>'Zakazat'
				]
			];
			return $constants[$key][$lang];
		}
	}
	
?>