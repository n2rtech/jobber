<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'type' => 'invoice',
            'value' => ["due_on_receipt" => "0", "notes" => "Notes can be edited in Settings > Invoice Settings.", "conditions" => "Terms and Conditions can be edited in Settings > Invoice Settings.", "allow_for_note" => true],
        ]);
        Setting::create([
            'type' => 'calendar',
            'value' => ["timing_starts" => "09:00:00", "timing_ends" => "19:59:00", "no_of_days" => 5],
            "days" => [0, 1, 2, 3, 4, 5, 6],
        ]);
    }
}
