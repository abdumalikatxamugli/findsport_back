<?
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Media;
use App\MediaMap;
use DB;

class MediaLibrary extends Controller{
	
	public static function show($table, $master_id){
		
		$mappings=array_map(
			function ($v){
				return $v->media_id;
			},
			DB::select("SELECT media_id from media_master_map where master_id='$master_id' and master_table='$table'")
		);
		
		return view('admin.media_lib.list', ['media'=>Media::all(), 
											 'master_id'=>$master_id,
											 'table'=>$table,
											 'mappings'=>$mappings
											]
		);
	}
	public function set_mapping(Request $request){
		
		$updates=$request->json()->all();
		if(count($updates)>0){
			$elem=reset($updates);
			$master_table=$elem['master_table'];
			$master_id=$elem['master_id'];
			DB::delete("DELETE from media_master_map where master_id='$master_id' and master_table='$master_table'");
		}
		foreach ($updates as $update) {
			$media_map=new MediaMap();
			foreach ($update as $name => $value) {
				$media_map->{$name}=$value;
			}
			$media_map->save();
		}
		return response()->json($request->json()->all());
	}
	public function upload_media(Request $request){
		$model=new Media();
		$model->path=$request->file('file')->store('media');
		$model->save();
		return $model->id;
	}

}



?>