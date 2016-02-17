<?php

use Illuminate\Database\Seeder;

class FichiersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fichiers')->delete();

        for($i = 0; $i < 300; ++$i)
        {
            DB::table('fichiers')->insert([
                'path' => "path" . $i
            ]);
        }
    }
}
