<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use App\helpers\helper;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{

    public function registeruser(){
		$item = false;
		return view('admin.user',compact('item'));
		
	}

	public function submituser(Request $arr){
		if(!isset($arr->id)) {
		$this->validate($arr,[
		
	'uname'=>'required',
	'uemail'=>'required',
	'urole'=>'required',
	'upassword'=>'required',
		
		
		]);
	}
		if(isset($arr->id)) {
			$id = $arr->id;
			$emp = User::find($id);
		} else {
			$emp = new User;
		$emp->email = $arr->uemail;
		}
		
		$emp->name = $arr->uname;

		$emp->role_id = $arr->urole;
		$emp->password =bcrypt($arr->upassword);
		
	if($emp->save()){
	
	
   return redirect('admin/user/view')->with('success','successfully'); 
	}
}
public function userview(){

		$view= DB::table('users')->get();
		return view('admin.user_table',['view'=>$view]);
		
	}

	public function  useredits(Request $request){

	$id = $request->id;
	$item = User::where('id',$id)->first();
	//dd($item);
	return view('admin.user',compact('item','id'));
}
public function userupdates(Request $request)
{
	$id = $request->id;
	$user = User::find($id);
	$user->name = $request->uname;
		$user->email = $request->uemail;
		$user->role_id = $request->urole;
		$user->password = bcrypt($arr->upassword); //$request->upassword;
		 
		
	if($user->save()){
      	return redirect('/admin/user/view')->with('success','update seccessfully');

	      }
  }

public function userdelete($id){

	DB::delete('delete from users where id = ?',[$id]);
		return redirect('/admin/user/view')->with('success','update seccessfully');
     }

     //$user = DB::table('Users')->where('id', $->skill_id)->first();
}
