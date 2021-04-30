<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{

    public function registeruser(){
		
		return view('admin.user');
		
	}

	public function submituser(Request $arr){
		
		$this->validate($arr,[
		
	'uname'=>'required',
	'uemail'=>'required',
	'urole'=>'required',
	'upassword'=>'required',
		
		
		]);
		$emp = new User;
		$emp->name = $arr->uname;
		$emp->email = $arr->uemail;
		$emp->role_id = $arr->urole;
		$emp->password = $arr->upassword;
		
	$emp->save();
	
	
   return redirect('admin/user/view')->with('success','successfully'); 
	}
public function userview(){

		$view= DB::table('users')->get();
		return view('admin.user_table',['view'=>$view]);
		
	}

	public function  useredits(Request $request){

	$id = $request->id;
	$item = User::where('id',$id)->first();
	//dd($item);
	return view('admin.user_edit',compact('item'));
}
public function userupdates(Request $request)
{
	$id = $request->id;
	$user = User::find($id);
	$user->name = $request->uname;
		$user->email = $request->uemail;
		$user->role_id = $request->urole;
		$user->password = bcrypt($request->upassword);
		
	if($user->save()){
      	return redirect('/admin/user/view')->with('success','update seccessfully');

	      }
  }

public function userdelete($id){

	DB::delete('delete from users where id = ?',[$id]);
		return redirect('/admin/user/view')->with('success','update seccessfully');
     }
}
