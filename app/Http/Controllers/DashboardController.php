<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use App\Models\Estate;
use App\Services\GoogleAnalyticsService;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;

class DashboardController extends Controller
{
    protected $analyticsService;

    public function __construct(GoogleAnalyticsService $analyticsService)
    {
        $this->analyticsService = $analyticsService;
    }

    public function __invoke()
    {
        // Statistiques de base
        $messages = Contact::count();
        $users = User::count();
        $estates = Estate::count();

        // Récupérer les données Google Analytics (mise en cache pour 1 heure)
        $analyticsData = Cache::remember('analytics_data', 3600, function () {
            return $this->getAnalyticsData();
        });

        // Messages récents
        $recentMessages = Contact::orderBy('created_at', 'desc')
            ->limit(4)
            ->get();

        return view('dashboard.index', [
            'messages' => $messages,
            'users' => $users,
            'estates' => $estates,
            'visitors' => $analyticsData['totalVisitors'],
            'visitLabels' => json_encode($analyticsData['visitLabels']),
            'visitData' => json_encode($analyticsData['visitData']),
            'pageViewData' => json_encode($analyticsData['pageViewData']),
            'sourceLabels' => json_encode($analyticsData['sourceLabels']),
            'sourceData' => json_encode($analyticsData['sourceData']),
            'topPages' => $analyticsData['topPages'],
            'recentMessages' => $recentMessages
        ]);
    }

    /**
     * Récupère et formate les données d'analytics
     */
    private function getAnalyticsData()
    {
        $days = config('google-analytics.default_days', 7);

        // Récupérer les visiteurs et pages vues
        $visitorData = $this->analyticsService->getVisitorsAndPageViews($days);

        // Formater les données pour les graphiques
        $visitLabels = $visitorData->map(function ($item) {
            return $item['date']->format('D');
        })->toArray();

        $visitData = $visitorData->pluck('visitors')->toArray();
        $pageViewData = $visitorData->pluck('pageViews')->toArray();
        $totalVisitors = array_sum($visitData);

        // Récupérer les sources de trafic
        $trafficSources = $this->analyticsService->getTrafficSources($days);
        $sourceLabels = $trafficSources->pluck('source')->toArray();
        $sourceData = $trafficSources->pluck('sessions')->toArray();

        // Récupérer les pages les plus visitées
        $topPages = $this->analyticsService->getTopPages($days);

        return [
            'visitLabels' => $visitLabels,
            'visitData' => $visitData,
            'pageViewData' => $pageViewData,
            'totalVisitors' => $totalVisitors,
            'sourceLabels' => $sourceLabels,
            'sourceData' => $sourceData,
            'topPages' => $topPages
        ];
    }
}


