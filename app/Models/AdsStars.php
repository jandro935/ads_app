<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdsStars extends Model
{
    public function ads()
    {
        return $this->belongsTo(Ads::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
