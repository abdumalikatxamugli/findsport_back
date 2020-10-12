<?
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\User;
use App\Section as SectionModel;
use Illuminate\Support\Facades\Storage;

Class Section{
	private function view($file, $data=[]){
		return view('admin.sections.'.$file, $data);
	}
	public function list(Request $req){
		$data['sections']=SectionModel::all();
		return $this->view('list',$data);
	}
	public function create(Request $req){
		switch ($req->method()) {
			case 'GET':
				return $this->view('create');
				break;
			case 'POST':
				$model=new SectionModel;
				$fields=$req->all();
				unset($fields['_token']);
				foreach ($fields as $name => $value) {
					if($name=="trainers"){
						
						continue;
					}
					if(is_array($value)){
						$model->{$name}=json_encode($value);
						continue;
					}
					if($name=='image'){
						continue;
					}
					$model->{$name}=$value;
				}
				$model->save();
				if($req->has('trainers')){
					$trainers=$req->input('trainers');
					if($req->file('trainers')){
					$trainers_files=$req->file('trainers');
						foreach ($trainers_files as $index => $file) {
							$trainers[$index]['img']=$file['img']->store("sections/$model->id/trainers");
						}
					}
					
					$model->trainers=json_encode($trainers);
				}
				if($req->has('image')){
					$model->image=$req->file('image')->store("sections/$model->id");
				}
				$model->save();
				
				return redirect()->route('sections.list');
				break;
			default:
				echo "bad method";
				break;
		}
	}
	public function one(Request $req){
		switch ($req->method()) {
			case 'GET':
				$data['section']=SectionModel::where(['id'=>$req->id])->first();
				return $this->view('one',$data);
				break;
			case 'POST':
				$model=SectionModel::where(['id'=>$req->id])->first();
				$fields=$req->all();
				unset($fields['_token']);
				foreach ($fields as $name => $value) {
					if($name=="trainers"){
						continue;
					}
					if(is_array($value)){
						$model->{$name}=json_encode($value);
						continue;
					}
					if($name=='image'){
						continue;
					}
					$model->{$name}=$value;
				}
				$model->save();
				if($req->has('image')){
					Storage::delete("$model->image");
					$model->image=$req->file('image')->store("sections/$model->id");
				}
				$model->save();
				return redirect()->route('sections.list');
				break;
			
			default:
				echo "bad method";
				break;
		}
	}
	public function delete(Request $req){
		$section=SectionModel::where(['id'=>$req->id])->first();
		Storage::delete("$section->image");
		Storage::deleteDirectory("sections/$section->id");
		$section->delete();
		return redirect()->route('sections.list');
	}	
}

?>