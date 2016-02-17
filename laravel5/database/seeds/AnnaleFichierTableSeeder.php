<?php

use Illuminate\Database\Seeder;

class AnnaleFichierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('annale_fichier')->delete();

        for($i = 1; $i <= 300; ++$i)
        {
            DB::table('annale_fichier')->insert([
                'annale_id' => rand(1, 200),
                'fichier_id' => $i,
            ]);
        }
    }
}
