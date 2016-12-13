<?php

namespace App\Repositories;

use App\Models\Ads;
use App\Models\User;

class StarsRepository
{
    public function star(User $user, Ads $ads)
    {
        if ($user->hasStar($ads))
            return false;

        $user->stard()->attach($ads);

        return true;
    }

}