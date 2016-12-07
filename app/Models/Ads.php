<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Ads extends Model
{
    protected $fillable = ['title', 'body'];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
