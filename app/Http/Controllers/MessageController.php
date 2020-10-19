<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessageController extends Controller
{
    public function create(Request $req){
    	$fields=$req->all();
    	unset($fields['_token']);
    	$message=new Message();
    	foreach($fields as $name=>$value){
    		$message->$name=$value;
    	}
    	$message->save();
    	print_r("Your message has been saved");
    }
    public function list(){
    	$data['messages']=Message::all();
    	return view('admin.messages.list', $data);
    }
}
