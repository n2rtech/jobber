<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create(['type' => 'product', 'name' => 'Product 1', 'description' => 'This is Description for Product 1. You can edit products in Settings > Product & Services. ', 'tax_rates' => ["1", "2"]]);

        Product::create(['type' => 'product', 'name' => 'Product 2', 'description' => 'This is Description for Product 2. You can edit products in Settings > Product & Services. ', 'tax_rates' => ["1", "2"]]);

        Product::create(['type' => 'product', 'name' => 'Product 3', 'description' => 'This is Description for Product 3. You can edit products in Settings > Product & Services. ', 'tax_rates' => ["1", "2"]]);

        Product::create(['type' => 'product', 'name' => 'Product 4', 'description' => 'This is Description for Product 4. You can edit products in Settings > Product & Services. ', 'tax_rates' => ["1", "2"]]);

        Product::create(['type' => 'service', 'name' => 'Service 1', 'description' => 'This is Description for Service 1. You can edit services in Settings > Product & Services. ', 'tax_rates' => ["1", "2"]]);

        Product::create(['type' => 'service', 'name' => 'Service 2', 'description' => 'This is Description for Service 6. You can edit services in Settings > Product & Services. ', 'tax_rates' => ["1", "2"]]);

        Product::create(['type' => 'service', 'name' => 'Service 3', 'description' => 'This is Description for Service 7. You can edit services in Settings > Product & Services. ', 'tax_rates' => ["1", "2"]]);

        Product::create(['type' => 'service', 'name' => 'Service 4', 'description' => 'This is Description for Service 8. You can edit services in Settings > Product & Services. ', 'tax_rates' => ["1", "2"]]);
    }
}
