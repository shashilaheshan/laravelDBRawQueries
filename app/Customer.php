<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    
    protected $tables=['customers'];
    protected $fillable=['name','address'];
    protected $hidden=['mobile'];
}
