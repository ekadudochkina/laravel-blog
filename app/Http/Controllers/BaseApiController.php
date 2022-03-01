<?php

namespace App\Http\Controllers;

use Response;

/**
 * Базовый класс для REST API
 */
class BaseApiController extends Controller
{
    /**
     * Ответ с ошибкой
     * @param $msg
     * @param int $status
     * @return mixed
     */
    function respondWithError($msg, $status = 400)
    {
        $results = [];
        $results["error"] = $msg;

        return Response::json($results, $status);
    }

    /**
     * Успешный ответ
     * @param $data
     * @param int $status
     * @return mixed
     */
    function respond($data, $status = 200)
    {
        return Response::json($data, $status);
    }
}
