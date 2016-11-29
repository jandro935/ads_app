<?php

namespace app\Entities;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
