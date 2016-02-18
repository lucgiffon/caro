<?php

namespace App\Http\Controllers;


use App\Http\Requests\PostAnnaleRequest;

use App\Http\Controllers\Controller;

use App\Annale;
use App\Cursus;
use App\Faculte;
use App\Fichiers;
use App\Matiere;
use App\Niveau;
use App\Professeur;

use Mmanos\Search;


class SubmissionController extends Controller
{
    public function home()
    {
        return response()->view('submit');
    }

    public function postForm(PostAnnaleRequest $request) {


        $annee = $request->input('annee');

        $matiere = $request->input('matiere');
        $niveau = $request->input('niveau');
        $cursus = $request->input('cursus');
        $professeurs = $request->input('prof');
        $facultes = $request->input('faculte');
        $tags = $request->input('tag');

        \Search::insert(1, array(
            'matiere' => $matiere,
            'annee' => $annee,
            'niveau' => $niveau,
            'cursus' => $cursus,
            'professeurs' => $professeurs,
            'faculte' => $facultes,
            'tags' => $tags,
        ));

        $id_matiere = Matiere::firstOrCreate(['name' => $matiere])->id;
        $id_niveau = Niveau::firstOrCreate(['name' => $niveau])->id;
        $id_cursus = Cursus::firstOrCreate(['name' => $cursus])->id;

        Annale::create(['matiere_id' => $id_matiere,
            'niveau_id' => $id_niveau,
            'cursus_id' => $id_cursus,
            'annee' => date('Y/m/d', strtotime("1-1-" . $annee))]);

        $r = date('Y/m/d', strtotime("1-1-" . $annee));

        return response()->view('debug', ["r" => $r]);
    }

}
