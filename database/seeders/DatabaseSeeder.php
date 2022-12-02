<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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
        $this->call(SettingSeed::class);

        $this->call(UserSeed::class);

        $this->call(CompanyDetailSeeder::class);

        $this->call(JobTitleSeed::class);

        $this->call(TaxRateSeeder::class);

        $this->call(ProductSeed::class);

        $this->call(EmailTemplateSeed::class);

        $this->call(JobFormSeeder::class);

        $this->call(JobFormQuestionSeeder::class);

        $this->call(JobFormQuestionOptionSeeder::class);

        $this->call(CustomerSeeder::class);

        $this->call(CustomerNoteSeed::class);

        $this->call(JobSeed::class);

        $this->call(InvoiceSeed::class);

        $this->call(EstimateSeed::class);
    }
}
