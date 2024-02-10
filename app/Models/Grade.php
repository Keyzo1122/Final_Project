<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;
    protected $table = "grades";
    protected $fillable = ["colleger_id", "lesson_id", "grade", "semester"];

    public function colleger_id()
    {
        return $this->hasMany(Lecturer::class);
    }
    public function lesson()
    {
        return $this->belongsTo('Lesson::class');
    }
}
