<?php

namespace Database\Seeders;

use App\Models\JobTitle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobTitleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobTitle::create(['title' => 'Job Title 1']);

        JobTitle::create(['title' => 'Job Title 2']);

        JobTitle::create(['title' => 'Job Title 3']);

        JobTitle::create(['title' => 'Job Title 4']);

        JobTitle::create(['title' => 'Job Title 5']);

        JobTitle::create(['title' => 'Job Title 6']);

        JobTitle::create(['title' => 'Job Title 7']);

        JobTitle::create(['title' => 'Job Title 8']);
    }
}
