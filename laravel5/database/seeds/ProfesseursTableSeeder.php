<?php

use Illuminate\Database\Seeder;

class ProfesseursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('professeurs')->delete();

        for($i = 0; $i < 20; ++$i)
        {
            DB::table('professeurs')->insert([
                'name' => "professeur" . $i
            ]);
        }
    }
}
