<?php

namespace Database\Seeders;

use App\Models\Term;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Term::factory(5)->create();
    }
}
