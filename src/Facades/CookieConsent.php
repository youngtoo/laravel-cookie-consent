<?php

namespace Iantoo\Facades;

use Illuminate\Support\Facades\Facade;

class CookieConsent  extends Facade
{
    protected static function gerFacadeAccessor(){
        return 'cookie-consent';
    }
}