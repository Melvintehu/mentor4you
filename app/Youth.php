<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Youth extends Model
{
     protected $table = 'youth';


     protected $fillable = [
     	'first_name',
     	'last_name',
     	'description',
     	'date_of_birth'
     ];
}
