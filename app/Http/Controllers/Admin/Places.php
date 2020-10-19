<?
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use App\Places as Place;
use App\SportMasterMap;
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
					if($name=='sport'){
						continue;
					}
					$model->{$name}=$value;
				}
				$model->save();
				if($req->has('sport')){
					foreach($req->input('sport') as $id=>$val){
						$s_m_m=new SportMasterMap();
						$s_m_m->sport_id=$id;
						$s_m_m->master_id=$model->id;
						$s_m_m->master_table='places';
						$s_m_m->save();
					}
				}
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
					if($name=='sport'){
						continue;
					}
					$model->{$name}=$value;
				}
				$model->save();
				if($req->has('sport')){
					SportMasterMap::where([
						'master_table'=>'places',
						'master_id'=>$model->id
					])->delete();
					foreach($req->input('sport') as $id=>$val){
						$s_m_m=new SportMasterMap();
						$s_m_m->sport_id=$id;
						$s_m_m->master_id=$model->id;
						$s_m_m->master_table='places';
						$s_m_m->save();
					}
				}
				return redirect()->route('places.list');
				break;
			
			default:
				echo "bad method";
				break;
		}
	}
	public function delete(Request $req){
		SportMasterMap::where([
						'master_table'=>'places',
						'master_id'=>$req->id
					])->delete();
		$place=Place::where(['id'=>$req->id])->first();
		$place->delete();
		return redirect()->route('places.list');
	}	
}

?>