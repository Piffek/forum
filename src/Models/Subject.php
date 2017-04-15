<?php

namespace Piwko\Forum;

use Illuminate\Database\Eloquent\Model;
use DB;

class Subject extends Model
{
	protected $fillable = [
			'id', 'id_user', 'id_categories', 'body', 'subject'
	];

}
