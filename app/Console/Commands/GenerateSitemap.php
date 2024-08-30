<?php

namespace App\Console\Commands;

use samdark\sitemap\Sitemap;
use App\Models\Estate;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
// use Spatie\Sitemap\Sitemap;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    // public function handle()
    // {
    //     $sitemap = SitemapGenerator::create(env('APP_URL')) ->getSitemap();
    //     $sitemap->add(
    //         Url::create(route('contact'))
    //             ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
    //             ->setPriority(0.2)
    //     );
    //     $sitemap->add(
    //         Url::create(route('faq'))
    //             ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
    //             ->setPriority(0.2)
    //     );
    //     $sitemap->add(
    //         Url::create(route('about'))
    //             ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
    //             ->setPriority(0.2)
    //     );

    //     foreach (Estate::all() as $estate) {

    //         Sitemap::create()
    //             ->add($estate)
    //             ->add(Estate::all());
    //     }




    //     //     $projects = (new Project())->paginate(12);

    //     // if ($projects->lastPage() > 0) {
    //     //     foreach (range(1, $projects->lastPage()) as $index) {
    //     //         $url = route('projects.index', $index === 1 ? [] : ['page' => $index]);
    //     //         $sitemap->add(
    //     //             Url::create($url)
    //     //                 ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
    //     //                 ->setPriority(0.5)
    //     //         );
    //     //     }
    //     // }



public function handle() {
	// Création du sitemap à la racine du site
    $sitemap = new Sitemap(public_path('sitemap.xml'));

    // Ajouter les URLs fixe
    $sitemap->addItem(route('home'));
    $sitemap->addItem(route('contact'));
    $sitemap->addItem(route('about'));
    $sitemap->addItem(route('faq'));
    $sitemap->addItem(route('estates.index'));

    // Ajouter les URLs générées à partir de la base de données
    // $estates = Estate::getAll();
    // foreach ($estates as $estate) {
    //     $road = route('articles.show', $article->slug);
    //     $sitemap->addItem($road, $article->updated_at->timestamp);
    // }

    // Ecriture du sitemap
    $sitemap->write();

    $this->info('Sitemap créé avec succès !');
    return true;
}

    //     $path = public_path('sitemap.xml');
    //     SitemapGenerator::create('http://127.0.0.1:8000/')->writeToFile($path);
    // }
}
