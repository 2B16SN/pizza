<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $table = 'genders_master';
    protected $fillable = ['gender_name'];

}
