<?php

namespace Piwko\Forum\Models;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
	protected $fillable = [
			'id','text', 'id_subject', 'id_user',
	];
	

}
