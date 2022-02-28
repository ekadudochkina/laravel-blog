<?php
namespace App\Http\Controllers;
use App\Models\Article;
use App\Models\Tag;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index(Request $request){
        $tag = $request->input('tag');
        $tags = Tag::all();
        $query = Article::query();
        if ($tag)
        {
            $query->whereHas('tags', function ($q) use ($tag) {
                $q->where('slug', $tag);
            });
        }

        $query->latest();
        $articles = $query->paginate(9);
        return view("articles.index",compact("articles","tags","tag"));
    }

    public function show($slug){
        $article = Article::where('slug', $slug)->first();
        return view("articles.show",compact("article"));
    }
}
