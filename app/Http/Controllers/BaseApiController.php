<?php

namespace App\Http\Controllers;

use Response;

/**
 * Базовый класс для REST API
 */
class BaseApiController extends Controller
{
    function respondWithError($msg, $status = 400)
    {
        $results = [];
        $results["error"] = $msg;

        return Response::json($results, $status);
    }

    function respond($data, $status = 200)
    {
        return Response::json($data, $status);
    }
}
