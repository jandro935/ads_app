<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    protected $fillable = ['ads'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
