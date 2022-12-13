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
        JobTitle::create(['title' => 'SVC']);

        JobTitle::create(['title' => 'WAP']);

        JobTitle::create(['title' => 'MPR']);

    }
}
