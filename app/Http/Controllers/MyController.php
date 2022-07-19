<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index() {
        return response()->json([
            'msg' => "some message here",
        ]);
    }
}
