<?php

namespace Database\Seeders;

use App\Models\Article;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use DB;

class LikeSeed extends Seeder
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
            $tries = rand(1, 10);
            for ($i = 0; $i < $tries; $i++) {
                $this->generateLikes($article["id"]);
            }
        }
    }

    private function generateLikes($id)
    {
        DB::table('likes')->insert([
            'article_id' => $id,
            'hash' => md5(rand(0,100000)),
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
