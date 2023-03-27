<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'course', 'speciality'];

    public function scores()
    {
        return $this->hasMany(StudentScore::class);
    }
}
