<?php

namespace App\Http\Controllers;

use App\Cursus;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mmanos\Search;
use App\Annale;


class SearchEngineController extends Controller
{
    public function home() {
        return response()->view('home');
    }

    public function postForm(Request $request) {
        $query = $request->input('q');

        $annales[1]["cursus"];
        $elastic_results = \Search::search('id_cursus', $query)->get();

        $annales = [];

        foreach ($elastic_results as $elastic_result) {
            $annale = Annale::find($elastic_result['id']);
            $annales["matiere"] = $annale->matiere->name;
            $annales["cursus"] = $annale->cursus->name;
            $annales["annee"] = $annale->annee;
            $annales["niveau"] = $annale->niveau->name;
        }

        return response()->view('debug', ["annales" => $annales]);



    ;}
}
