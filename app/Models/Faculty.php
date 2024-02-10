<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;
    protected $table = "facultys";
    protected $fillable = ["faculty", "major"];

    public function lesson()
    {
        return $this->hasMany(Lesson::class);
    }
    public function Colleger()
    {
        return $this->hasMany(Colleger::class);
    }
}
