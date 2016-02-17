<?php

use Illuminate\Database\Seeder;

class TagsAnnalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        DB::table('tags_annales')->delete();

        for($i = 0; $i < 1000; ++$i)
        {
            DB::table('tags_annales')->insert([
                'tag_id' => rand(1, 100),
                'annale_id' => rand(1, 200),
            ]);
        }
    }
}
