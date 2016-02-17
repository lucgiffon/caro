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

        $matiere = $request->input('matiere');
        $niveau = $request->input('niveau');
        $cursus = $request->input('cursus');
        $annee = $request->input('annee');
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

        Matiere::firstOrCreate(['name' => $matiere]);
        Niveau::firstOrCreate(['name' => $niveau]);
        Cursus::firstOrCreate(['name' => $cursus]);
        Professeur::firstOrCreate(['name' => $professeurs]);
        Faculte::firstOrCreate(['name' => $facultes]);

        return response()->view('debug', ["r" => $r]);
    }

}
