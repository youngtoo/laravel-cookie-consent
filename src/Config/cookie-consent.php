<?php
/**
 * Add configurations as needed.
 */
return [
    // Is the cookie enabled?
    'enabled'                       => true,
    // Cookie name on browser
    'cookie_name'                   => 'cookie_consent',

    // How long will the cookie last?
    'cookie_lifetime'               => 365,

    // Default language
    'default_languge'               => 'en',

    // Other optional languages
    'available_languages'           => ['en','fr', 'sw'],

    // Consent view
    'view'                          => 'cookie-consent::consent',
];