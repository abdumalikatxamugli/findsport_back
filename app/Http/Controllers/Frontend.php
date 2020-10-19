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
  private $langs=[
      'uz'=>'Ўзбек',
      'oz'=>"O'zbek",
      'ru'=>"Русский"
  ];
  private function view($file, $data=[], $req){
  	$data['body']="frontend.$file";
    $l=$req->l;
    $langs=$this->langs;
    if($langs[$l]??false){
      $inactive_langs=$langs;
      unset($inactive_langs[$l]);
      $data['inactive_langs']=$inactive_langs;
      $data['langs']=$langs;
      $data['l']=$l;
    }else{
      abort(404);
    }
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
  public function section(Request $req){
    return $this->view('section_inner',[], $req);
  }
  public function club(Request $req){
    return $this->view('club_inner',[], $req);
  }
  public function place(Request $req){
    $data['place']=Places::where(['id'=>$req->id])->first();
    if($data['place'])
      return $this->view('place_inner',$data, $req);
    return abort(404);
  }

}
