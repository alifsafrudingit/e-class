<?php

namespace App\Models;

use App\Models\CourseModul;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'mentors_id', 'img', 'name', 'price', 'description', 'slug'
    ];

    public function modul()
    {
        return $this->hasMany(CourseModul::class, 'courses_id', 'id');
    }
}
