<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use App\Entities\User;

class Ads extends Model
{
    protected $fillable = ['title', 'body'];

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
