<?php

use Illuminate\Database\Seeder;

class AnnaleTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        DB::table('annale_tag')->delete();

        for($i = 0; $i < 1000; ++$i)
        {
            DB::table('annale_tag')->insert([
                'tag_id' => rand(1, 100),
                'annale_id' => rand(1, 200),
            ]);
        }
    }
}
