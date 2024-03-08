<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    protected function sendSuccess($data = [], $message ="Success"){
        return response()->json([
            'code' => 200,
            'message' => $message,
            'data' => $data
        ],200);
    }
    protected function sendMessage($message ="Sucess"){
        return response()->json([
            'code' => 200,
            'message' => $message,
        ],200);
    }
    protected function sendUnauthorized( $message ="Unauthorized"){
        return response()->json([
            'code' => 401,
            'message' => $message,
        ],401);
    }
    protected function sendBadRequest( $message ="Bad Request"){
        return response()->json([
            'code' => 400,
            'message' => $message,
        ],400);
    }
    protected function sendForbiden( $message ="Forbiden"){
        return response()->json([
            'code' => 403,
            'message' => $message,
        ],403);
    }
}
