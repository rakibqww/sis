<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentResult extends Model
{
    use HasFactory;
	
	
	public function student(){
		//return $this->belongsTo('App\Student','student_id','id');
		 return $this->hasOne('App\Models\Student', 'id', 'student_id');
	}
}
