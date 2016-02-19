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
        $elastic_results = \Search::search('id_cursus', $query)->get();

        foreach ($elastic_results as $elastic_result) {
            $annale_array = [];
            $annale = Annale::find($elastic_result['id']);
            $annale_array[] = $annale->matiere->name;
            $annale_array[] = $annale->cursus->name;
            $annale_array[] = $annale->annee;
            $annale_array[] = $annale->niveau->name;
            $annale_array[] = $annale->facultes;
            $annale_array[] = $annale->professeurs;

            $annales[] = $annale_array;
        }

        return response()->json($annales);
    }
}
