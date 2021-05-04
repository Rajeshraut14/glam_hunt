<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categore extends Model
{
        public function childs(){
      return $this->hasMany('App\categore','parent_id');
    }

}
