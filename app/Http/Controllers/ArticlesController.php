<?php
namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index($tag = null){
        $tags = Tag::all();

        $query = Article::query();

        if ($tag)
        {
            $query->whereHas('tags', function ($q) use ($tag) {
                $q->where('slug', $tag);
            });
        }

        $articles = $query->get();

        return view("articles.index",compact("articles","tags"));
    }
}
