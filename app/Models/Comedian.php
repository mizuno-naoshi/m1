<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Comedian extends Model
{
    use HasFactory;
    protected $table = 'comedians';
    protected $fillable = ['name', 'note'];
    
    public function comedy()
    {
        return $this->hasMany(Comedy::class);
    }
}
