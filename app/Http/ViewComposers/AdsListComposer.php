<?php

namespace App\Http\ViewComposers;

use Illuminate\Support\Facades\Route;

class AdsListComposer
{
    public function compose($view)
    {
        $view->title = trans(Route::currentRouteName().'_title');
    }
}
