<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SearchEngineController extends Controller
{
    public function home() {
        return response()->view('home');
    }

    public function postForm(Request $request) {
        return response()->view('home', ["response" => $request->input('query')]);
    }
}
