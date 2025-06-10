<?php

return [
    /*
     * L'ID de mesure de votre propriété Google Analytics 4.
     */
    'measurement_id' => env('GOOGLE_ANALYTICS_ID', 'G-72L2N05SRQ'),

    /*
     * L'ID de propriété GA4 (sans le préfixe "properties/")
     */
    'property_id' => env('GOOGLE_ANALYTICS_PROPERTY_ID', ''),

    /*
     * Le chemin vers le fichier de clé de service.
     */
    'service_account_credentials_json' => storage_path('app/google-analytics/service-account-credentials.json'),

    /*
     * Période par défaut en jours
     */
    'default_days' => 7,
];