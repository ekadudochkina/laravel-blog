<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use DB;

class TagSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [["trips","Путешествия"],["science","Наука"],["cooking","Кулинария"],["education","Образование"],["sport","Спорт"],["music","Музыка"]];
        foreach ($tags as $tag){
            DB::table('tags')->insert([
                'slug' => $tag[0],
                'title' => $tag[1],
            ]);
        }
    }
}
