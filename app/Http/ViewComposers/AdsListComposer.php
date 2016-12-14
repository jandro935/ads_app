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

        $adsStar = Ads::join('ads_stars', 'ads.id', '=', 'ads_stars.ads_id')
            ->select('ads.id', 'ads.title', 'ads.body', 'ads.user_id', 'ads.created_at', 'ads.updated_at')
            ->where('ads_stars.user_id', currentUser()->id)
            ->count();
        $view->adsStar = $adsStar;
    }
}

// @TODO: Corregir problema N+1
// @TODO: Quitar Star Ad cuando se le da a Unstar Ad en Your Star Ads
// @TODO: Listados de Ads en perfil usuario
// @TODO: Recordar contraseña y Registro de perfil
// @TODO: Cambiar imagen de perfil
// @TODO: Ver lista de usuarios registrados
