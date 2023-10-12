<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index() {
        $data = 'khanhpnph23703@fpt.edu.vn';
        event(new \App\Events\SendEmailEvent($data));
        return response()->json([
            'message' => 'Email sent successfully'
        ], 200);
    }
}
