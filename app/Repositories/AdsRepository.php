<?php

namespace App\Repositories;

use App\Models\Ads;
use App\Repositories\BaseRepository;

class AdsRepository extends BaseRepository
{
    public function getModel()
    {
        return new Ads();
    }

    public function addAd($title, $body, $user)
    {
        return $user->ads()->create([
            'title' => $title,
            'body' => $body,
        ]);
    }
}
