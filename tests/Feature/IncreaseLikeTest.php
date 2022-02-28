<?php

namespace Tests\Feature;

use App\Models\Article;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class IncreaseLikeTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        $this->artisan('migrate:refresh');
        $this->artisan('db:seed');
    }

    /**
     * Testing a Successful Request
     *
     * @return void
     */
    public function test_making_successful_api_request()
    {

        $article = Article::latest()->first();
        $response = $this->postJson('/api/increaseLike/'.$article->id);
        $response->assertStatus(200);
    }

    /**
     * Testing a Successful Increase Likes
     *
     * @return void
     */
    public function test_article_like_increase()
    {

        $article = Article::latest()->first();
        $likeCount = $article->number_of_likes();
        $response = $this->postJson('/api/increaseLike/'.$article->id);
        $response->assertStatus(200);

        $updatedArticle = Article::find($article->id);
        $updatedLikeCount = $updatedArticle->number_of_likes();

        $this->assertEquals($likeCount+1, $updatedLikeCount);
    }

    /**
     * Testing Unable to Like Twice
     *
     * @return void
     */
    public function test_unable_to_like_twice()
    {

        $article = Article::latest()->first();
        $likeCount = $article->number_of_likes();
        $response = $this->postJson('/api/increaseLike/'.$article->id);
        $response->assertStatus(200);

        $response = $this->postJson('/api/increaseLike/'.$article->id);
        $response
            ->assertStatus(400)
            ->assertJson(['error' => "Вы уже поставили лайк!",]);

        $updatedArticle = Article::find($article->id);
        $updatedLikeCount = $updatedArticle->number_of_likes();

        $this->assertEquals($likeCount+1, $updatedLikeCount);
    }
}
