<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['titulo','post','user_id'];

    public function user()
    {
        # code...
        return $this->belongsTo(User::class);
    }
}
