<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Media;
use App\User;
use DB;
use Auth;
use Illuminate\Support\Facades\Hash;
use Storage;
class Admin extends Controller
{
  public function index(){
    $data=[];
    $data['body']='admin.dashboard';
    $data['page']='Dashboard';
    return view('admin.index', $data);
  }
  public function create_employee(Request $req){
    $data['page']='create '.$req->type;
    $data['type']=$req->type;
    $data['body']='admin.employee.create';
    return view('admin.index', $data);
  }
  public function save_employee(Request $req){
    if($req->has('id')){
      $user['name'] =$req->input('name');
      $user['email'] = $req->input('email');
      $user['role']=$req->input('role');
      if($req->input('password')!=''){
        $user['password'] = Hash::make($req->input('password'));
      }
      User::where(['id'=>$req->input('id')])->update($user);
      return redirect(route('index_emp',$req->input('role')));
    }else{
      $user= new User;
      $user->name =$req->input('name');
      $user->email = $req->input('email');
      $user->role=$req->input('role');
      $user->password = Hash::make($req->input('password'));
      $user->save();
      return redirect(route('index_emp',$req->input('role')));
    }
  } 
  public function index_employees(Request $req){
    $data['page']='List of '.$req->type."s";
    $data['type']=$req->type;
    $data['posts']=DB::select("select * from users where role='$req->type'");
    $data['body']='admin.employee.index';
    return view('admin.index', $data);
  }  
  public function edit_employees(Request $req){
    $data['page']="Edit ".$req->type;;
    $data['type']=$req->type;
    $data['post']=DB::select("select * from users where id='$req->id'")[0];
    $data['body']='admin.employee.edit';
    return view('admin.index', $data);
  }
  public function delete_employees(Request $req){
    DB::delete("delete from users where id='$req->id'");
    return redirect(route('index_emp',$req->type));
  }
}
