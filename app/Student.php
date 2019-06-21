<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
      'name', 'email', 'phone', 'serial', 'school', 'gpa', 'address', 'faculty_id', 'dob', 'image', 'level_id', 'gender',
    ];

    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function getImageUrlAttribute($value)
    {
        $imageUrl = "";

        if ( ! is_null($this->image))
        {
            $imagePath = public_path() . "/Entrance/images/" . $this->image;
            if (file_exists($imagePath)) $imageUrl = asset("/Entrance/images/" . $this->image);
        }

        return $imageUrl;
    }

    public function scopeFilter($query, $term)
    {
        if ($term)
        {
            $query->where(function($q) use ($term) {
                $q->orWhere('email', 'LIKE', "%{$term}%");
                $q->orWhere('name', 'LIKE', "%{$term}%");
            });
        }
    }

    public function scopeLatestFirst($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
}
