<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\role;
use App\helpers\helper;
use Auth;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public function registerrole(){
    	$item = false;
		return view('admin.role', compact('item'));
		
	}

	public function submitrole(Request $arr){
		if(!isset($arr->id)) {
		$this->validate($arr,[
		
	'uname'=>'required',
	'ustatus'=>'required'
		
		
		]);
	}
	if(isset($arr->id)) {
			$id = $arr->id;
			$emp = role::find($id);
		} else {
			$emp = new role;
		}
		$emp->name = $arr->uname;
		$emp->status = $arr->ustatus;
		
	if($emp->save()){
	
	
   return redirect('admin/role')->with('success','successfully'); 
	}
}
	public function roleview(){

		$data= DB::table('roles')->get();
		return view('admin.role_table',['data'=>$data]);
		
	}

	public function  roleedits(Request $request){

	$id = $request->id;
	$item = role::where('id',$id)->first();
	//dd($item);
	return view('admin.role',compact('item','id'));
}
public function roleupdates(Request $request)
{
	$id = $request->id;
	$user = role::find($id);
	$user->name = $request->uname;
	$user->status = $request->ustatus;
		
	if($user->save()){
               	return redirect('/admin/role')->with('success','update seccessfully');

	}
 }
 public function roledelete($id){

	DB::delete('delete from roles where id = ?',[$id]);
		return redirect('/admin/role')->with('success','update seccessfully');
     }
}
