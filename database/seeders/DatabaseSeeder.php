<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Lisitng;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Listing::factory(12)->create();
    }
}
