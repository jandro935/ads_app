<?php

namespace app\Repositories;

use App\Entities\Ads;
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
