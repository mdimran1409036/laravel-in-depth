<?php

namespace App\Services\Geolocation;
use Illuminate\Support\Facades\Facade;

/**
 * @method static array search(string $string)
 * @see GeoLocation
 */


class GeolocationFacade extends Facade{
    protected static function getFacadeAccessor(){
        return Geolocation::class;
    }
}
