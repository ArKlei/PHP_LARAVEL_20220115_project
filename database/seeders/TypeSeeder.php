<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //name, short_name, description
        //Mažoji bendrija, MB, ribota atsakomybė
        //Uždaroji akcinė bendrovė, UAB, ribota atsakomybė
        //Individuali įmonė, IĮ, neribota atsakomybė
        //Akcinė bendrovė, AB, ribota atsakomybė
        DB::table('types')->insert([
            'name' => 'Mažoji bendrija',
            'short_name' => 'MB',
            'description' => 'ribota atsakomybė',
        ]);
        DB::table('types')->insert([
            'name' => 'Uždaroji akcinė bendrovė',
            'short_name' => 'UAB',
            'description' => 'ribota atsakomybė',
        ]);
        DB::table('types')->insert([
            'name' => 'Individuali įmonė',
            'short_name' => 'IĮ',
            'description' => 'neribota atsakomybė',
        ]);
        DB::table('types')->insert([
            'name' => 'Akcinė bendrovė',
            'short_name' => 'AB',
            'description' => 'ribota atsakomybė',
        ]);
    }
}
