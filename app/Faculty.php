<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $fillable = ['name'];

    public function student()
    {
        return $this->hasMany(Student::class);
    }
}
