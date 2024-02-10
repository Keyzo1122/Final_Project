<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colleger extends Model
{
    use HasFactory;
    protected $table = "collegers";
    protected $fillable = ["nim", "name", "address", "faculty_id"];

    public function faculty()
    {
        return $this->belongsToMany(Faculty::class);
    }
    public function grade()
    {
        return $this->belongsToMany(Grade::class);
    }
}
