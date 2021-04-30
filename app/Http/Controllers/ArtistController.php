<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artist;
use Auth;
use Illuminate\Support\Facades\DB;

class ArtistController extends Controller
{

public function view(){

		$data= DB::table('artists')->get();
		return view('admin.table',['data'=>$data]);
		
	}

    public function indexs(){
		
		return view('admin.register');
		
	}

	public function submit(Request $arr){
		
		$this->validate($arr,[
		
	'uusername'=>'required',
	'uskill'=>'required',
	'ufirst'=>'required',
	'ulast'=>'required',
	'uemail'=>'required',
	'uphone'=>'required',
	'ugender'=>'required',
	'upassword'=>'required',
		
		
		]);
		$emp = new artist;
		$emp->username = $arr->uusername;
		$emp->skill_id = $arr->uskill;
		$emp->first_name = $arr->ufirst;
		$emp->last_name = $arr->ulast;
		$emp->email = $arr->uemail;
		$emp->phone = $arr->uphone;
		$emp->gender = $arr->ugender;
		$emp->password = bcrypt($arr->upassword);
		
	$emp->save();
	
	
   return redirect('admin/artist')->with('success','successfully'); 
	}

public function  edits(Request $request){

	$id = $request->id;
	$item = artist::where('id',$id)->first();
	//dd($item);
	return view('admin.edit',compact('item'));
}
public function updates(Request $request)
{
	$id = $request->id;
	$user = artist::find($id);
	$user->username = $request->uusername;
		$user->skill_id = $request->uskill;
		$user->first_name = $request->ufirst;
		$user->last_name = $request->ulast;
		$user->email = $request->uemail;
		$user->phone = $request->uphone;
		$user->gender = $request->ugender;
		$user->password = bcrypt($request->upassword);
		
	if($user->save()){
               	return redirect('/admin/artist')->with('success','update seccessfully');

	}
}

public function delete($id){

	DB::delete('delete from artists where id = ?',[$id]);
		return redirect('/admin/artist')->with('success','update seccessfully');
}
	            
}
