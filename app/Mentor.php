<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    protected $fillable = [
    	'first_name',
    	'last_name',
    	'description',
    	'date_of_birth'

    ];
}
