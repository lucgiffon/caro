<?php

use Illuminate\Database\Seeder;

class MatieresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matieres')->delete();

        for($i = 0; $i < 100; ++$i)
        {
            DB::table('matieres')->insert([
                'name' => "matiere" . $i
            ]);
        }
    }
}
