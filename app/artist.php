<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artist extends Model
{
    //In model we add like this
public function getCityNameAttribute(){
    	 $skill_id = $this->skill_id;
		$skills = DB::table('skills')->where('id', $skill_id)->first();
		return $skill ? $skills->skill : '';
    }	
}

