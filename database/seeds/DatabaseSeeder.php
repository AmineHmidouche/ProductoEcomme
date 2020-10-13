<?php

use App\Produit;
use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class , 10)->create();
        factory(Produit::class , 100)->create();
    }
}
