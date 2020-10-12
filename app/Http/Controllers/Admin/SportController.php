<?
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\generics\MODEL_CONTROLLER;

Class SportController extends MODEL_CONTROLLER{
	function __construct()
	{
		parent::__construct('Sport',[
				'id'=>[
					'tag'=>'input',
					'type'=>'text',
					'readonly'=>'true',
					'listed'=>'true',
					'is'=>'text'
				],
				'title'=>[
					'tag'=>'input',
					'type'=>'text',
					'listed'=>'true',
					'json'=>'true'
				],
				'path'=>[
					'tag'=>'input',
					'type'=>'file',
					
					'file'=>'true'
				]
			]
		);
	}
	
}

?>