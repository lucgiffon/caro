<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mmanos\Search;


class SearchEngineController extends Controller
{
    public function home() {
        return response()->view('home');
    }

    public function postForm(Request $request) {
        \Search::insert(1, array(
            'title' => 'My title',
            'content' => 'The quick brown fox...',
            'status' => 'published',
        ));
        return response()->view('home', ["response" => $request->input('q')]);
    }
}
