<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = [
      'name', 'serial', 'dob', 'faculty', 'status', 'gender',
    ];
}
