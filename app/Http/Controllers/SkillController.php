<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\skill;
use App\helpers\helper;
use Auth;
use Illuminate\Support\Facades\DB;

class SkillController extends Controller
{
     public function registerskill(){
		
		$item = false;
		return view('admin.skill', compact('item'));
		//return view('admin.register');
		
	}

	public function submitskill(Request $arr){
		
		$this->validate($arr,[
		
	'uskill'=>'required',
		
		
		]);
	
		if($arr->id) {
			$id = $arr->id;
			$emp = skill::find($id);
		} else {
			$emp = new skill;
		}
		$emp->skill = $arr->uskill;
		
	if($emp->save()){

   return redirect('admin/skillview')->with('success','successfully'); 

	}
	
	
	}
	public function skillview(){

		$view= DB::table('skills')->get();
		return view('admin.skill_table',['view'=>$view]);
		
	}

	public function  skilledits(Request $request){

	$id = $request->id;
	$item = skill::where('id',$id)->first();
	//dd($item);
	return view('admin.skill',compact('item','id'));
}
public function skillupdates(Request $request)
{
	$id = $request->id;
	$user = skill::find($id);
	$user->skill = $request->uskill;
		
	if($user->save()){
               	return redirect('/admin/skillview')->with('success','update seccessfully');

	}
 }
 public function skilldelete($id){

	DB::delete('delete from skills where id = ?',[$id]);
		return redirect('/admin/skillview')->with('success','update seccessfully');
     }
}