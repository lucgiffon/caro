<?php

use Illuminate\Database\Seeder;

class AnnalesFichiersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('annales_fichiers')->delete();

        for($i = 1; $i <= 300; ++$i)
        {
            DB::table('annales_fichiers')->insert([
                'annale_id' => rand(1, 200),
                'fichier_id' => $i,
            ]);
        }
    }
}
