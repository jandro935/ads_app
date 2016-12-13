<?php

namespace App\Http\ViewComposers;

use App\Models\Ads;
use Illuminate\Support\Facades\Route;

class AdsListComposer
{
    public function compose($view)
    {
        $view->title = trans(Route::currentRouteName().'_title');

        $adsByAuthor = Ads::where('user_id', currentUser()->id)->count();
        $view->adsByAuthor = $adsByAuthor;
    }
}
