<?php

use Illuminate\Database\Seeder;

class ProfesseursAnnalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professeur_annale')->delete();

        for($i = 0; $i < 200; ++$i)
        {
            DB::table('professeur_annale')->insert([
                'professeur_id' => rand(1, 20),
                'annale_id' => rand(1, 200),
            ]);
        }
    }
}
