<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artist;
use App\helpers\helper;
use Auth;
use Illuminate\Support\Facades\DB;

class ArtistController extends Controller
{


    public function indexs(){
		$item = false;
		return view('admin.register', compact('item'));
		
	}

	public function submit(Request $arr){
		if(!isset($arr->id)) {
			$this->validate($arr,[
		
	'uusername'=>'required',
	'uskill'=>'required',
	'ufirst'=>'required',
	'ulast'=>'required',
	'uemail'=>'required',
	'uphone'=>'required',
	'ugender'=>'required',
	'upassword'=>'required',
	'ustatus'=>'required',
		
		
		]);
		}
		if(isset($arr->id)) {
			$id = $arr->id;
			$emp = artist::find($id);
		} else {
			$emp = new artist;
			$emp->email = $arr->uemail;
		}
		
		$emp->username = $arr->uusername;
		$emp->skill_id = $arr->uskill;
		$emp->first_name = $arr->ufirst;
		$emp->last_name = $arr->ulast;
		$emp->phone = $arr->uphone;
		$emp->gender = $arr->ugender;
		$emp->password = bcrypt($arr->upassword);
		$emp->status = $arr->ustatus;	
		if($emp->save()) {
			return redirect('admin/artist')->with('success','successfully'); 
		}
	}

public function view(){

		$data= DB::table('artists')->get();
		return view('admin.table',['data'=>$data]);
		
	}
	public function  edits(Request $request){

	$id = $request->id;
	$item = artist::where('id',$id)->first();
	//dd($item);
	return view('admin.register',compact('item', 'id'));
}
public function updates(Request $request)
{
	$id = $request->id;
	$emp = artist::find($id);
	$emp->username = $request->uusername;
		$emp->skill_id = $request->uskill;
		$emp->first_name = $request->ufirst;
		$emp->last_name = $request->ulast;
		$emp->email = $request->uemail;
		$emp->phone = $request->uphone;
		$emp->gender = $request->ugender;
		$emp->password = bcrypt($request->upassword);
		$emp->status = $request->ustatus;	
		if($emp->save()) {
			return redirect('admin/artist')->with('success','successfully'); 
		}
  }


public function delete($id){

	DB::delete('delete from artists where id = ?',[$id]);
		return redirect('/admin/artist')->with('success','update seccessfully');
}
	            
}
