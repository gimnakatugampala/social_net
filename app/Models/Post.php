<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'text',
        'image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
