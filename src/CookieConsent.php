<?php
namespace Iantoo;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\View;
class CookieConsent {

    // Handle consent, display prompt
    public function render(){
        return View::make('cookie-consent::consent')->render();
    }
}