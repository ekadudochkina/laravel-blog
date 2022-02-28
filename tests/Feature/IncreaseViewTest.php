<?php

namespace Tests\Feature;

use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IncreaseViewTest extends TestCase
{

    /**
     * Testing a Successful Request
     *
     * @return void
     */
    public function test_making_successful_api_request()
    {
        $article = Article::latest()->first();
        $response = $this->postJson('/api/increaseViews/'.$article->id);
        $response->assertStatus(200);
    }

    /**
     * Testing a Successful Increase View
     *
     * @return void
     */
    public function test_article_view_increase()
    {
        $article = Article::latest()->first();
        $viewCount = $article->number_of_views();
        $response = $this->postJson('/api/increaseViews/'.$article->id);
        $response->assertStatus(200);

        $updatedArticle = Article::find($article->id);
        $updatedViewCount = $updatedArticle->number_of_views();

        $this->assertEquals($viewCount+1, $updatedViewCount);
    }
}
