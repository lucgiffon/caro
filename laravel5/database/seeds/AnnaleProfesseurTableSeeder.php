<?php

use Illuminate\Database\Seeder;

class AnnaleProfesseurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('annale_professeur')->delete();

        for($i = 0; $i < 200; ++$i)
        {
            DB::table('annale_professeur')->insert([
                'professeur_id' => rand(1, 20),
                'annale_id' => rand(1, 200),
            ]);
        }
    }
}
