<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
    	'title',
    	'body',
    	'page_id'
    ];

    
    public function page()
    {
    	return $this->belongsTo('App\Page');
    }


}
