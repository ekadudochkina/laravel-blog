<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use DB;

class ArticleTagSeed extends Seeder
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
            $tries = rand(1, 3);
            for ($i = 0; $i < $tries; $i++) {
                $this->generateTags($article["id"]);
            }
        }
    }

    private function generateTags($id)
    {
        DB::table('article_tags')->insert([
            'article_id' => $id,
            'tag_id' => rand(1, 6),
        ]);
    }
}
