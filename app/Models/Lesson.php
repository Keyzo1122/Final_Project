<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $table = "lessons";
    protected $fillable = ["lecturer_id", "faculty_id", "lesson", "sks"];

    // public function lecture()
    // {
    //     return $this->belongsToMany('Lecture::class');
    // }

    // public function faculty()
    // {
    //     return $this->belongsToMany('Faculty::class');
    // }

    // public function grade()
    // {
    //     return $this->hasMany(Grade::class);
    // }
}
