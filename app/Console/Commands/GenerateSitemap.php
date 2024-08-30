<?php

namespace App\Console\Commands;

use Spatie\Sitemap\Tags\Url;
use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:generate-sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sitemap = SitemapGenerator::create(config('app.url'))
            ->getSitemap();
        $sitemap->add(
            Url::create(route('contact'))
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setPriority(0.2)
        );
        $sitemap->add(
            Url::create(route('faq'))
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setPriority(0.2)
        );
        $sitemap->add(
            Url::create(route('about'))
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
                ->setPriority(0.2)
        );


        //     $projects = (new Project())->paginate(12);

        // if ($projects->lastPage() > 0) {
        //     foreach (range(1, $projects->lastPage()) as $index) {
        //         $url = route('projects.index', $index === 1 ? [] : ['page' => $index]);
        //         $sitemap->add(
        //             Url::create($url)
        //                 ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
        //                 ->setPriority(0.5)
        //         );
        //     }
        // }

        $sitemap->writeToFile(public_path('sitemap/sitemap.xml'));
    }
}
