<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'user',
        'comments'
    ];

    public function responses()
    {
        return $this->hasMany(Response::class, 'commnent_id');
    }
}
