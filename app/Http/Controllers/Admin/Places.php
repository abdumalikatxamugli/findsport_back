<?
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use App\Places as Place;
use Illuminate\Support\Facades\Storage;

Class Places{
	private function view($file, $data=[]){
		return view('admin.'.$file, $data);
	}
	public function list(Request $req){
		$data['places']=Place::all();
		return $this->view('places.list',$data);
	}
	public function create(Request $req){
		switch ($req->method()) {
			case 'GET':
				return $this->view('places.create');
				break;
			case 'POST':
				$model=new Place;
				$fields=$req->all();
				unset($fields['_token']);
				foreach ($fields as $name => $value) {
					if(is_array($value)){
						$model->{$name}=json_encode($value);
						continue;
					}
					if($name=='image'){
						$model->{$name}=$req->file($name)->store('places');
						continue;
					}
					$model->{$name}=$value;
				}
				$model->save();
				return redirect()->route('places.list');
				break;
			default:
				echo "bad method";
				break;
		}
	}
	public function one(Request $req){
		switch ($req->method()) {
			case 'GET':
				$data['place']=Place::where(['id'=>$req->id])->first();
				return $this->view('places.one',$data);
				break;
			case 'POST':
				$model=Place::where(['id'=>$req->id])->first();
				$fields=$req->all();
				unset($fields['_token']);
				foreach ($fields as $name => $value) {
					if(is_array($value)){
						$model->{$name}=json_encode($value);
						continue;
					}
					if($name=='image'){
						Storage::delete($model->image);
						$model->{$name}=$req->file($name)->store('places');
						continue;
					}
					$model->{$name}=$value;
				}
				$model->save();
				return redirect()->route('places.list');
				break;
			
			default:
				echo "bad method";
				break;
		}
	}
	public function delete(Request $req){
		$place=Place::where(['id'=>$req->id])->first();
		$place->delete();
		return redirect()->route('places.list');
	}	
}

?>