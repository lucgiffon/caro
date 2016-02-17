<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faculte extends Model
{
    protected $table = "facultes";

    protected $fillable = ["name"];

}
