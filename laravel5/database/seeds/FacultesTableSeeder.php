<?php

use Illuminate\Database\Seeder;

class FacultesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facultes')->delete();

        for($i = 0; $i < 20; ++$i)
        {
            DB::table('facultes')->insert([
                'name' => "faculte" . $i
            ]);
        }
    }
}
