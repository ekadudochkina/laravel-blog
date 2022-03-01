<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddCommentRequest;
use App\Jobs\AddCommentJob;
use App\Models\Article;
use App\Models\Like;
use App\Models\View;
use Illuminate\Http\Request;
use Redirect, Response;
use DB;

class ApiController extends BaseApiController
{
    /**
     * Увеличивает лайки у статьи
     *
     * @param Request $request
     * @param $id
     * @return mixed
     */
    public function increaseLike(Request $request, $id)
    {
        $article = Article::find($id);
        if (!$article) {
            return $this->respondWithError("Статья не найдена");
        }

        $model = new Like();
        $hash = $model->createHash($request);
        if (!$hash) {
            return $this->respondWithError("Вы не можете ставить лайк на этом сайте");
        }

        $count = Like::where('hash', $hash)->where('article_id', $id)->count();
        if ($count > 0) {
            return $this->respondWithError("Вы уже поставили лайк!");
        }

        $model->article_id = $id;
        $model->hash = $hash;
        if (!$model->save()) {
            $this->respondWithError("Не удается сохранить лайк");
        }
        $count = Like::where('article_id', $id)->count();
        return $this->respond(["count" => $count]);
    }

    /**
     * Увеличивает просмотры у статьи
     * @param $id
     * @return mixed
     */
    public function increaseViews($id)
    {
        $article = Article::find($id);
        if (!$article) {
            return $this->respondWithError("Статья не найдена");
        }
        $model = new View();
        $model->article_id = $id;
        if (!$model->save()) {
            $this->respondWithError("Не удается сохранить просмотр");
        }

        $count = View::where('article_id', $id)->count();
        return $this->respond(["count" => $count]);
    }

    /**
     * Добавляет комментарий у статьи
     * @param AddCommentRequest $request
     * @param $id
     * @return mixed
     */
    public function addComment(AddCommentRequest $request, $id)
    {
        $article = Article::find($id);
        if (!$article) {
            return $this->respondWithError("Статья не найдена");
        }

        $request->validated();
        AddCommentJob::dispatch(["articleId" => $id, "subject" => $request->input("subject"), "body" => $request->input("body")]);

        return $this->respond(["message" => "Спасибо! Ваш комментарий будет добавлен через некторое время."]);
    }
}
