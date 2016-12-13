<?php

namespace App\Repositories;

use App\Models\Ads;
use App\Models\User;

class StarsRepository
{
    /**
     * @param User $user
     * @param Ads  $ads
     *
     * @return bool
     */
    public function star(User $user, Ads $ads)
    {
        if ($user->hasStar($ads)) {
            return false;
        }

        $user->stard()->attach($ads);

        return true;
    }

    /**
     * @param User $user
     * @param Ads  $ads
     *
     * @return bool
     */
    public function unstar(User $user, Ads $ads)
    {
        if (!$user->hasStar($ads)) {
            return false;
        }

        $user->stard()->detach($ads);

        return true;
    }
}
