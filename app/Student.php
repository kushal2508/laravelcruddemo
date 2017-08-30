<?php

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Student extends Eloquent
{
    protected $fillable = [
    	'name', 'email', 'password',
    ];

    protected $hidden = [
    	'password'
    ];
}
