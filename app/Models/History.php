<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = ['action', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
