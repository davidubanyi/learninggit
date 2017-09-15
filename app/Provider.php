<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    //no timestamps for a provider
    public $timestamps = false;

    //fillable fields for a provider

    protected $fillable = [

    	'name',
    	'copyright_email'
    ];
}
