<?php

namespace App\Http\Controllers;

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

/*        \Search::insert(1, array(
            'title' => 'My title',
            'content' => 'The quick brown fox...',
            'status' => 'published',
        ));*/
        $elasticsearch_results = \Search::search('id_cursus', $query)->get();

        $annale_id = array();
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

        $r = array($elasticsearch_results, $annale_matiere, $annale_cursus, $annale_annee, $annale_niveau);
//        $annales = Annale::find(1)->niveau;

        return response()->view('debug', ["r" => $r]);



        return response()->view('home', ["response" => $request->input('q')]);
    }
}
