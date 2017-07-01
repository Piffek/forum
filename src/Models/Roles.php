<?php

namespace Piwko\Forum\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'updated_at', 'created_at'
    ];

}
