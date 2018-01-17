<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studentdetail extends Model
{
    protected $fillable=['fname','lname','email','mobile','dob','address','city','state','pin','image','created_at','updated_at'];
}
