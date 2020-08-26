<?php

use App\Media;

// $req->validate([
//             'media' => 'mimes:jpg,jpeg,png|max:4096',
//            ]);
function save_media($file, $master_table, $master_id){
    $filename = time().$file->getClientOriginalName();
    Storage::disk('local')->putFileAs(
        'uploads/'.$master_table."/".$master_id,
        $file,
        $filename
    );
    $media = new Media;
    $media->master_id=$master_id;
    $media->master_table=$master_table;
    $media->path=$filename;
    $media->save();
}
function delete_media($id, $filename, $master_table, $master_id){
	Storage::delete('uploads/'.$master_table."/".$master_id."/".$filename);
	Media::destroy($id);
}
?>
