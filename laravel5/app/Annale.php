<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Annale extends Model
{

    protected $table = "annales";

    public function niveau() {
        return $this->belongsTo('App\Niveau');
    }

    public function cursus() {
        return $this->belongsTo('App\Cursus');
    }

    public function matiere() {
        return $this->belongsto('App\Matiere');
    }

    public function professeurs() {
        return $this->belongsToMany('App\Professeur');
    }
}
