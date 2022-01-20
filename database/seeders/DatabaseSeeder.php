<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Client;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database. "Php artisan migrate:fresh --seed" komanda galima paleisti
     *
     * @return void
     */
    public function run()
    {
        //Client::factory()->count(30)->create();
        //Company::factory()->count(10)->create();
        $this->call([
            
            CompanySeeder::class,
            ClientSeeder::class
        ]);
    }
}
