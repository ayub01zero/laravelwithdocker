<?php

namespace App\Http\Controllers;

class ApiController extends Controller
{
    
    public function index()
    {
        return response()->json([
            'status' => 'success',
            'message' => 'Welcome to the API'
        ]);
    }
}
