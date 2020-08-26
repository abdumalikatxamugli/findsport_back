<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Auth;
use Session;
use Illuminate\Support\Facades\Hash;
use Storage;

class Frontend extends Controller
{
  public function home(Request $req){
    $data['l']=$req->l;
    $data['body']="frontend.home";
  	return view('frontend.index', $data);
  }

  
}
