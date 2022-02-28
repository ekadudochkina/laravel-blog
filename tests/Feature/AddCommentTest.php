<?php
namespace Tests\Feature;
use App\Models\Article;
use Tests\TestCase;

class AddCommentTest extends TestCase
{
    /**
     * Testing a Successful Request
     *
     * @return void
     */
    public function test_making_successful_api_request()
    {
        $article = Article::latest()->first();
        $data = ["subject"=> "My test comment subject", "body"=> "My test comment body"];

        $response = $this->postJson('/api/addComment/'.$article->id, $data);
        $response->assertStatus(200);
    }

    /**
     * Testing Error Request (Not found article)
     *
     * @return void
     */
    public function test_article_does_not_exist_in_add_comment_api_request()
    {
        $articleId = 0;
        $data = ["subject"=> "My test comment subject", "body"=> "My test comment body"];

        $response = $this->postJson('/api/addComment/'.$articleId, $data);
        $response
            ->assertStatus(400)
            ->assertJson([
                'error' => "Статья не найдена",
            ]);
    }
}
