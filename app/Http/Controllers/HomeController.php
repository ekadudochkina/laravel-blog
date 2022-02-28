<?php
namespace App\Http\Controllers;
use App\Models\Article;

/**
 * Главная страница
 */
class HomeController extends Controller
{
    public function index(){
        $articles = Article::latest()->take(6)->get();
        return view("index",compact("articles"));
    }
}
