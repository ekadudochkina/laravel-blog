<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use DB;

class ViewsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articles = Article::all();
        foreach ($articles as $article) {
            $tries = rand(1, 30);
            for ($i = 0; $i < $tries; $i++) {
                $this->generateViews($article["id"]);
            }
        }
    }

    private function generateViews($id)
    {
        DB::table('views')->insert([
            'article_id' => $id,
        ]);
    }
}
