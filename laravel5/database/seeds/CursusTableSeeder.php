<?php

use Illuminate\Database\Seeder;

class CursusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cursus')->delete();

        for($i = 0; $i < 50; ++$i)
        {
            DB::table('cursus')->insert([
                'name' => "cursus" . $i
            ]);
        }
    }
}
