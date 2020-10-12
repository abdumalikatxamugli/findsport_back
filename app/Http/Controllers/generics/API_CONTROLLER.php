<?
namespace App\Http\Controllers;
use Illuminate\Http\Request;



Class API_CONTROLLER extends Controller{
	function __construct($model, $required_fields=[])
	{
		$model="App\\".$model;
		$this->model=new $model();
		$this->required_fields=$required_fields;
	}
	protected function get(Request $req){
		$data=$this->model::all();
		return response()->json($data);
	}
	protected function getOne(Request $req){
		$data=$this->model::where("$req->field", $req->value)->get();
		if(count($data)>0)
			return response()->json($data[0]);
		return response($data, 404);	
	}
	protected function post(Request $request){

	}
	protected function put(Request $request){
		
	}
	protected function delete(Request $request){
		
	}

}

?>