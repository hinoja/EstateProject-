<?php

namespace App\Services;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;

class GoogleAnalyticsService
{
    protected $client;
    protected $analytics;
    protected $propertyId;
    protected $isConfigured = false;

    public function __construct()
    {
        try {
            $this->propertyId = config('google-analytics.property_id');
            $credentialsPath = config('google-analytics.service_account_credentials_json');

            if (file_exists($credentialsPath) && !empty($this->propertyId)) {
                $this->client = new \Google\Client();
                $this->client->setAuthConfig($credentialsPath);
                $this->client->addScope('https://www.googleapis.com/auth/analytics.readonly');

                $this->analytics = new \Google\Service\AnalyticsData($this->client);
                $this->isConfigured = true;
            } else {
                Log::warning('Google Analytics Service not configured: credentials file or property ID missing');
                $this->isConfigured = false;
            }
        } catch (\Exception $e) {
            Log::error('Google Analytics Service initialization failed: ' . $e->getMessage());
            $this->isConfigured = false;
        }
    }

    /**
     * Vérifie si le service est correctement configuré
     */
    public function isConfigured()
    {
        return $this->isConfigured;
    }

    /**
     * Récupère les visiteurs et pages vues par jour
     */
    public function getVisitorsAndPageViews($days = 7)
    {
        if (!$this->isConfigured) {
            return $this->getMockData($days);
        }

        try {
            $startDate = Carbon::now()->subDays($days)->format('Y-m-d');
            $endDate = Carbon::now()->format('Y-m-d');

            $dateRange = new \Google\Service\AnalyticsData\DateRange();
            $dateRange->setStartDate($startDate);
            $dateRange->setEndDate($endDate);

            $dimensionDate = new \Google\Service\AnalyticsData\Dimension();
            $dimensionDate->setName('date');

            $metricVisitors = new \Google\Service\AnalyticsData\Metric();
            $metricVisitors->setName('activeUsers');

            $metricPageViews = new \Google\Service\AnalyticsData\Metric();
            $metricPageViews->setName('screenPageViews');

            $request = new \Google\Service\AnalyticsData\RunReportRequest();
            $request->setProperty('properties/' . $this->propertyId);
            $request->setDateRanges([$dateRange]);
            $request->setDimensions([$dimensionDate]);
            $request->setMetrics([$metricVisitors, $metricPageViews]);

            $response = $this->analytics->properties->runReport(
                'properties/' . $this->propertyId,
                $request
            );

            $result = [];
            if ($response && $response->getRows()) {
                foreach ($response->getRows() as $row) {
                    $dateValue = $row->getDimensionValues()[0]->getValue();
                    $date = Carbon::createFromFormat('Ymd', $dateValue);
                    $visitors = (int) $row->getMetricValues()[0]->getValue();
                    $pageViews = (int) $row->getMetricValues()[1]->getValue();

                    $result[] = (object)[
                        'date' => $date,
                        'visitors' => $visitors,
                        'pageViews' => $pageViews
                    ];
                }
            }

            return collect($result);
        } catch (\Exception $e) {
            Log::error('Google Analytics getVisitorsAndPageViews failed: ' . $e->getMessage());
            return $this->getMockData($days);
        }
    }

    /**
     * Récupère les sources de trafic
     */
    public function getTrafficSources($days = 7)
    {
        if (!$this->isConfigured) {
            return $this->getMockTrafficSources();
        }

        try {
            $startDate = Carbon::now()->subDays($days)->format('Y-m-d');
            $endDate = Carbon::now()->format('Y-m-d');

            $dateRange = new \Google\Service\AnalyticsData\DateRange();
            $dateRange->setStartDate($startDate);
            $dateRange->setEndDate($endDate);

            $dimensionSource = new \Google\Service\AnalyticsData\Dimension();
            $dimensionSource->setName('sessionSource');

            $metricSessions = new \Google\Service\AnalyticsData\Metric();
            $metricSessions->setName('sessions');

            $request = new \Google\Service\AnalyticsData\RunReportRequest();
            $request->setProperty('properties/' . $this->propertyId);
            $request->setDateRanges([$dateRange]);
            $request->setDimensions([$dimensionSource]);
            $request->setMetrics([$metricSessions]);

            $response = $this->analytics->properties->runReport(
                'properties/' . $this->propertyId,
                $request
            );

            $result = [];
            if ($response && $response->getRows()) {
                foreach ($response->getRows() as $row) {
                    $source = $row->getDimensionValues()[0]->getValue() ?: 'Direct';
                    $sessions = (int) $row->getMetricValues()[0]->getValue();

                    $result[] = (object)[
                        'source' => $source,
                        'sessions' => $sessions
                    ];
                }
            }

            return collect($result)->sortByDesc('sessions')->take(4);
        } catch (\Exception $e) {
            Log::error('Google Analytics getTrafficSources failed: ' . $e->getMessage());
            return $this->getMockTrafficSources();
        }
    }

    /**
     * Récupère les pages les plus visitées
     */
    public function getTopPages($days = 7)
    {
        if (!$this->isConfigured) {
            return $this->getMockTopPages();
        }

        try {
            $startDate = Carbon::now()->subDays($days)->format('Y-m-d');
            $endDate = Carbon::now()->format('Y-m-d');

            $dateRange = new \Google\Service\AnalyticsData\DateRange();
            $dateRange->setStartDate($startDate);
            $dateRange->setEndDate($endDate);

            $dimensionPage = new \Google\Service\AnalyticsData\Dimension();
            $dimensionPage->setName('pagePath');

            $metricPageViews = new \Google\Service\AnalyticsData\Metric();
            $metricPageViews->setName('screenPageViews');

            $request = new \Google\Service\AnalyticsData\RunReportRequest();
            $request->setProperty('properties/' . $this->propertyId);
            $request->setDateRanges([$dateRange]);
            $request->setDimensions([$dimensionPage]);
            $request->setMetrics([$metricPageViews]);

            $response = $this->analytics->properties->runReport(
                'properties/' . $this->propertyId,
                $request
            );

            $result = [];
            if ($response && $response->getRows()) {
                foreach ($response->getRows() as $row) {
                    $pagePath = $row->getDimensionValues()[0]->getValue();
                    $pageViews = (int) $row->getMetricValues()[0]->getValue();

                    $result[] = (object)[
                        'page_url' => $this->formatPagePath($pagePath),
                        'views' => $pageViews
                    ];
                }
            }

            return collect($result)->sortByDesc('views')->take(4);
        } catch (\Exception $e) {
            Log::error('Google Analytics getTopPages failed: ' . $e->getMessage());
            return $this->getMockTopPages();
        }
    }

    /**
     * Formate le chemin de la page pour l'affichage
     */
    private function formatPagePath($path)
    {
        $path = trim($path, '/');
        if (empty($path)) {
            return 'Accueil';
        }

        // Convertir les slugs en titres lisibles
        $segments = explode('/', $path);
        $lastSegment = end($segments);

        // Remplacer les tirets par des espaces et mettre en majuscule
        return ucfirst(str_replace('-', ' ', $lastSegment));
    }

    /**
     * Génère des données fictives pour les visiteurs et pages vues
     */
    private function getMockData($days)
    {
        $result = [];
        $date = Carbon::now()->subDays($days - 1);

        for ($i = 0; $i < $days; $i++) {
            $currentDate = $date->copy()->addDays($i);
            $result[] = (object)[
                'date' => $currentDate,
                'visitors' => rand(20, 100),
                'pageViews' => rand(50, 200)
            ];
        }

        return collect($result);
    }

    /**
     * Génère des données fictives pour les sources de trafic
     */
    private function getMockTrafficSources()
    {
        return collect([
            (object)['source' => 'Direct', 'sessions' => rand(100, 300)],
            (object)['source' => 'Google', 'sessions' => rand(80, 250)],
            (object)['source' => 'Facebook', 'sessions' => rand(50, 150)],
            (object)['source' => 'Instagram', 'sessions' => rand(30, 100)]
        ]);
    }

    /**
     * Génère des données fictives pour les pages les plus visitées
     */
    private function getMockTopPages()
    {
        return collect([
            (object)['page_url' => 'Accueil', 'views' => rand(500, 1500)],
            (object)['page_url' => 'Terrains', 'views' => rand(300, 1000)],
            (object)['page_url' => 'À propos', 'views' => rand(200, 800)],
            (object)['page_url' => 'Contact', 'views' => rand(100, 600)]
        ]);
    }
}




