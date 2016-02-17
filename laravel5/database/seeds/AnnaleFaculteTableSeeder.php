<?php

use Illuminate\Database\Seeder;

class AnnaleFaculteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('annale_faculte')->delete();

        for($i = 1; $i <= 200; ++$i)
        {
            DB::table('annale_faculte')->insert([
                'annale_id' => $i,
                'faculte_id' => rand(1, 20),
            ]);
        }
    }
}
