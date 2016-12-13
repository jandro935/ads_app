<?php

/**
 * @return \Illuminate\Contracts\Auth\Authenticatable|null
 */
function currentUser()
{
    return auth()->user();
}