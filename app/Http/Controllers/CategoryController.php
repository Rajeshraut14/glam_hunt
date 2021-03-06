<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categore;
use Auth;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
     public function registercategory(){
     	$categore = categore::get();
		$item = false;
		return view('admin.category',compact('item'))->with('categore',$categore);
		
	}
 
	public function submitcategory(Request $arr){
		if(!isset($arr->id)) {
		$this->validate($arr,[
		
	'uname'=>'required',
	'ustatus'=>'required'	
		]);
	}
	if(isset($arr->id)) {
			$id = $arr->id;
			$emp = categore::find($id);
		} else {
			$emp = new categore;
		}
		
		$emp->name = $arr->uname;
		$emp->parent_id = $arr->uparent;
		$emp->status = $arr->ustatus;
		$emp->show_in_navigation = $arr->ushow_in_navigation;
		$emp->is_featured = $arr->uis_featured;

	if($emp->save()){

   return redirect('admin/categore/view')->with('success','successfully'); 
	}
}
	public function categoreview(){

		$view= DB::table('categores')->get();
		return view('admin.categorie_table',['view'=>$view]);
		
	}
	public function  categorieedits(Request $request){

	$id = $request->id;
	$item = categore::where('id',$id)->first();
	//dd($item);
	return view('admin.category',compact('item','id'));
}
public function categorieupdates(Request $request)
{
	$id = $request->id;
	$user = categore::find($id);
		$user->name = $request->uname;
		$user->parent_id = $request->uparent;
		$user->status = $request->ustatus;
		$user->show_in_navigation = $request->ushow_in_navigation;
		$user->is_featured = $request->uis_featured;
		
	if($user->save()){
      	return redirect('/admin/categore/view')->with('success','update seccessfully');

	      }
  }

public function categoridelete($id){

	DB::delete('delete from categores where id = ?',[$id]);
		return redirect('/admin/categore/view')->with('success','update seccessfully');
}


}

