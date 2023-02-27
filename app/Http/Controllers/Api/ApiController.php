<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    public function apiResponse($data, $message, $errors = [], $status = 200)
    {
        return response()->json([
            'data' => $data,
            'message' => $message,
            'errors' => $errors,
        ], $status);
    }
}
