<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Ads extends Model
{
    //    protected $fillable = ['ads'];

    public function user()
    {
        //        return $this->belongsTo(User::class);
        return $this->hasOne('App\User', 'id');
    }
}
