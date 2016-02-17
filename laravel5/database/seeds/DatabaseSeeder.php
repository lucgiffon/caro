<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(UserTableSeeder::class);
        $this->call("TagsTableSeeder");
        $this->call("FacultesTableSeeder");
        $this->call("FichiersTableSeeder");
        $this->call("MatieresTableSeeder");
        $this->call("NiveauxTableSeeder");
        $this->call("CursusTableSeeder");
        $this->call("AnnalesTableSeeder");
        $this->call("ProfesseursTableSeeder");
        $this->call("AnnaleFichierTableSeeder");
        $this->call("AnnaleProfesseurTableSeeder");
        $this->call("AnnaleTagTableSeeder");
        $this->call("AnnaleFaculteTableSeeder");

    }
}
