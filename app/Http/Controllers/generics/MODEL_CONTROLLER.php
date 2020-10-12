<?
namespace App\Http\Controllers\generics;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\MediaLibrary;
use Storage;

Class MODEL_CONTROLLER extends Controller{
	function __construct($model, $fields)
	{
		$this->entity=lcfirst($model);
		$this->model="App\\".$model;
		$this->fields=$fields;
		$this->langs=['uz', 'oz', 'ru'];
		
	}
	protected function get(Request $req){
		$data['iterable']=$this->model::all();
		$data['fields']=$this->fields;
		$data['entity']=$this->entity;
		$data['langs']=$this->langs;
		$data['page']=$this->entity."s list";
		$data['body']='admin.generic.index';
		
		return view('admin.index', $data);
	}
	protected function getOne(Request $req){
		$data['item']=$this->model::where("$req->field", $req->value)->get();
		if(count($data['item'])>0){
			$data['item']=$data['item'];
			$data['langs']=$this->langs;
			$data['fields']=$this->fields;
			$data['entity']=$this->entity;
			$data['page']=$this->entity." edit";
			$data['body']='admin.generic.edit';
			return view('admin.index', $data);
		}
		return abort(404);	
	}
	protected function post(Request $request){
		$model=new $this->model();
		//remove csrf field
		$fields=array_slice($request->all(), 1);
		
		foreach ($fields as $name => $value) {
			// summernote escape
			if($name=='files')
				continue;
			if(is_array($value)){
				$model->{$name}=json_encode($value);
				continue;
			}
			if($this->fields[$name]['file']??false){
				$model->{$name}=$request->file($name)->store($this->entity);
				continue;
			}
			$model->{$name}=$value;
			
		}
		$model->save();
		return redirect(route($this->entity."_get"));

	}
	protected function put(Request $request){
		$instance=$this->model::where("$request->field", $request->value)->first();
		$update=array_slice($request->all(), 1);
		foreach ($update as $name => $value) {
			if(is_array($value)){
				$update[$name]=json_encode($value);
				continue;
			}
			if($this->fields[$name]['file']??false){
				if($request->has($name)){
					Storage::delete($instance->$name);
					$update[$name]=$request->file($name)->store($this->entity);
				}
				continue;
			}
		}
		// summernote support
		unset($update['files']);
	
		$this->model::where("$request->field", $request->value)->update($update);
		return redirect(route($this->entity."_get"));
	}
	protected function delete(Request $request){
		$instance=$this->model::where("$request->field", $request->value)->first();
		foreach ($this->fields as $name => $value) {
			if($value['file']??false){
				Storage::delete($instance->{$name});
			}
		}
		$this->model::where("$request->field", $request->value)->delete();
		return redirect(route($this->entity."_get"));
	}
	protected function init(Request $request){
		$data['fields']=$this->fields;
		$data['page']=$this->entity." edit";
		$data['langs']=$this->langs;
		$data['body']='admin.generic.init';
		return view('admin.index', $data);
	}
	public function delete_img(Request $req){
		$entity=$this->model::where("id", $req->id)->first();
		if($entity){
			Storage::delete($entity->path);
			$entity->path=null;
			$entity->save();
			return redirect()->route($this->entity."_getOne", 
				['field'=>'id','value'=>$entity->id]);
		}
	}
}

?>