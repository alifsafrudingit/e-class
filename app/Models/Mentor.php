<?php

namespace App\Models;

use App\Models\Course;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mentor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone'
    ];

    public function course()
    {
        return $this->hasMany(Course::class, 'mentors_id', 'id');
    }
}
