<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comedy;

class Comedy extends Model
{
    use HasFactory;
    protected $table = 'comedies';
    protected $fillable = ['title', 'script', 'comedian_id', 'year', 'rank'];
    
    public function comedian()
    {
        return $this->belongsTo(Comedian::class);
    }
    
    public function like_users()
    {
        return $this->belongsToMany(User::class);
    }
}
