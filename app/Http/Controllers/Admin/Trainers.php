<?
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Section;
use Illuminate\Support\Facades\Storage;

class Trainers extends Controller{

	public function delete(Request $req){
		$section_id=$req->sec_id;
		$trainer_id=$req->id;
		$section=Section::where(['id'=>$section_id])->first();
		$trainers=json_decode($section->trainers, true);
		Storage::delete($trainers[$trainer_id]['img']);
		unset($trainers[$trainer_id]);
		$section->trainers=json_encode($trainers);
		$section->save();
		return redirect()->route('sections.edit',$section->id);
	}
	public function add(Request $req){
		$section_id=$req->sec_id;
		$section=Section::where(['id'=>$section_id])->first();
		$trainers=json_decode($section->trainers, true);
		$trainer['title']=$req->input('title');
		$trainer['bio']=$req->input('bio');
		$trainer['img']=$req->file('img')->store("sections/$section->id/trainers");
		array_push($trainers, $trainer);
		$section->trainers=json_encode($trainers);
		$section->save();

		return redirect()->route('sections.edit',$section->id);
	}

}



?>