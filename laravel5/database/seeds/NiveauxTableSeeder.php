<?php

use Illuminate\Database\Seeder;

class NiveauxTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('niveaux')->delete();

        for($i = 0; $i < 10; ++$i)
        {
            DB::table('niveaux')->insert([
                'name' => "niveau" . $i
            ]);
        }
    }
}
