<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Auth;
use App\Places;
use App\Section;
use App\Clubs;
use App\Sport;

class Frontend extends Controller
{
  private function view($file, $data=[], $req){
  	$data['body']="frontend.$file";
    $data['l']=$req->l;
  	return view('frontend.index', $data);
  }
  public function home(Request $req){
  	$data['places']=Places::latest()->take(8)->get();    	
  	$data['clubs']=Clubs::latest('id')->take(8)->get();
  	$data['sports']=Sport::latest('id')->take(4)->get(); 
  	return $this->view('home', $data, $req);
  }
  public function media(Request $req){
   	$data['body']="frontend.media";
  	return view('frontend.index',$data);
  } 
  public function places(Request $req){
    
    $data['iterable']=Places::latest('id')->take(10)->get();
    return $this->view('places',$data, $req);
  }  
  public function sections(Request $req){
    $data['iterable']=Section::latest('id')->take(10)->get();
    return $this->view('sections',$data, $req);
  } 
  public function clubs(Request $req){
    $data['iterable']=Clubs::latest('id')->take(10)->get();
    return $this->view('clubs',$data, $req);
  } 
}
