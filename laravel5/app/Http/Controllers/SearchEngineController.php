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


        $elasticsearch_results = \Search::search('tags', $query, array('fuzzy' => true))->get();

        $annale_matiere = array();
        $annale_cursus = array();
        $annale_annee = array();
        $annale_niveau = array();
        foreach ($elasticsearch_results as $elastic_result) {
            $annale = Annale::find($elastic_result['id']);
            $annale_matiere[] = $annale->matiere->name;
            $annale_cursus[] = $annale->cursus->name;
            $annale_annee[] = $annale->annee;
            $annale_niveau[] = $annale->niveau->name;
        }

        return response()->view('home', ["matiere" => $annale_matiere,
            "cursus" => $annale_cursus,
            "annee" => $annale_annee,
            "niveau" => $annale_niveau]);



    }
}
