<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Mmanos\Search;



class AnnalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('annales')->delete();

        for($i = 0; $i < 200; ++$i)
        {
            $id_matiere = rand(1, 10);
            $id_faculte = rand(1, 20);
            $id_niveau = rand(1, 10);
            $id_cursus = rand(1, 50);
            \Search::insert($i, array(
            'id_matiere' => $id_matiere,
            'id_faculte' => $id_faculte,
            'id_niveau' => $id_niveau,
            'id_cursus' => $id_cursus,
             ));
            DB::table('annales')->insert([
                'id_matiere' => rand(1, 10),
                'id_faculte' => rand(1, 20),
                'id_niveau' => rand(1, 10),
                'id_cursus' => rand(1, 50),
                'annee' => Carbon::createFromDate(rand(2009, 2015)),
                'path' => "path" . $i
            ]);
        }
    }
}
