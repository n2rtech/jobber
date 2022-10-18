<?php

namespace Database\Seeders;

use App\Models\JobForm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        JobForm::create(['title' => 'Job Form 1']);

        JobForm::create(['title' => 'Job Form 2']);

        JobForm::create(['title' => 'Job Form 3']);

    }
}
