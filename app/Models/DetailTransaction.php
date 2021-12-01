<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id', 'courses_id', 'transactions_id'
    ];

    public function course()
    {
        return $this->hasOne(Course::class, 'id', 'courses_id');
    }
}
