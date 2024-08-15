<?php
// src/CookieConsent/ServiceProvider.php
namespace Iantoo;

use Illuminate\Support\ServiceProvider;

class CookieConsentServiceProvider extends ServiceProvider
{
    public function boot(){

        // Load Views
        $this->loadViewsFrom(__DIR__.'/../resources/views',  'cookie-consent');

        // Load language translations
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang','cookie-consent');

        // Publish the configuration file
        $this->publishes([
            __DIR__.'/../config/cookie-consent.php' => config_path('cookie-consent.php'),
        ],'cookie-consent-config');

        // Add a blade directive.
        Blade::directive('cookieConsent', function() {
            return "<?php echo app('cookie-consent')->render(); ?>";
        });
    }

    public function register(){
        // Register the service
        $this->app->bind('cookie-consent', function() {
            return new CookieConsent;
        });
    }
}