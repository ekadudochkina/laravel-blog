<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TagSeed::class);
        $this->call(ArticleSeed::class);
        $this->call(ArticleTagSeed::class);
        $this->call(LikeSeed::class);
        $this->call(ViewsSeed::class);
    }
}
