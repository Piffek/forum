<?php

namespace Piwko\Forum\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
	protected $fillable = [
			'id', 'name',
	];
}
