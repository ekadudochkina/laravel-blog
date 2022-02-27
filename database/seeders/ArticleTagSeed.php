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
        foreach ($articles as $article){
            DB::table('article_tags')->insert([
                'article_id' => $article["id"],
                'tag_id' => rand(1, 6),
            ]);
        }
    }
}
