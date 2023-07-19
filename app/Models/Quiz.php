<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Quiz extends Model
{
    use HasFactory;
    protected $table = 'quizzes';
    protected $fillable = ['question', 'answer', 'user_id'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function like_users()
    {
        return $this->belongsToMany(User::class);
    }
}
