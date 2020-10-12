<?
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\generics\MODEL_CONTROLLER;

Class ClubController extends MODEL_CONTROLLER{
	function __construct()
	{
		parent::__construct('Clubs',[
				'id'=>[
					'tag'=>'input',
					'type'=>'text',
					'readonly'=>'true',
					'listed'=>'true',
					'is'=>'text'
				],
				'path'=>[
					'tag'=>'input',
					'type'=>'file',
					'file'=>'true'
				],
				'title'=>[
					'tag'=>'input',
					'type'=>'text',
					'listed'=>'true',
					'json'=>'true'
				],
				'description'=>[
					'tag'=>'input',
					'type'=>'text',
					'json'=>'true'
				],
				'address'=>[
					'tag'=>'input',
					'type'=>'text',
					'json'=>'true'
				],
				'phone'=>[
					'tag'=>'input',
					'type'=>'text',
					'listed'=>'true',
				],
				'metro'=>[
					'tag'=>'input',
					'type'=>'text',
					'json'=>'true'
				],
				'location'=>[
					'tag'=>'input',
					'type'=>'text',
					'custom_json'=>'true',
					'custom_json_fields'=>['long', 'lat']
				]
			]
		);
	}

}

?>