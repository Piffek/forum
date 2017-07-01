<?php

namespace Piwko\Forum\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Subject extends Model
{
	protected $fillable = [
			'id', 'id_user', 'id_categories', 'body', 'subject'
	];
	
	public function getSubject(){
	    return Subject::where('id_user', Auth::user()->id);
	}
	
	public function addNewSubject($body){
	    Subject::create($body);
	}

}
