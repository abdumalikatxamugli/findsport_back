<?
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\generics\MEDIA_MODEL_CONTROLLER;

Class MediaModelController extends MEDIA_MODEL_CONTROLLER{
	function __construct()
	{
		parent::__construct('Media',[
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
					'listed'=>'true',
					'is'=>'file'
				]
			]
		);
	}
	
}

?>