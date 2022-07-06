<?php

namespace App\Console\Commands;

use App\Components\ImportAnimeData;
use App\Components\ImportDataClient;
use App\Models\Post;
use Illuminate\Console\Command;

class ImportAnimePostsCommand extends Command
{

    protected $signature = 'import:animeposts';

    protected $description = 'get data from anilist';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $import = new ImportAnimeData();
        for ($i = 0; $i < 10; $i++) {
        $response = $import->client->request('GET', 'random/anime');
        $data = json_decode($response->getBody()->getContents());

            foreach ($data as $item) {
                Post::firstOrCreate([
                    'title' => $item->title
                ], [
                    'title' => $item->title,
                    'content' => $item->synopsis,
                    'category_id' => 2,
                ]);
            }
        }
        dd('finish');
    }
}
