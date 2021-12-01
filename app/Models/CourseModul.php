<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CourseModul extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'courses_id', 'modul', 'url'
    ];

    public function course()
    {
        return $this->belongsTo(Course::class, 'courses_id', 'id');
    }
}
