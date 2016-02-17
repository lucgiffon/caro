<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->delete();

        for($i = 0; $i < 100; ++$i)
        {
            DB::table('tags')->insert([
                'name' => "tag" . $i
            ]);
        }
    }
}
