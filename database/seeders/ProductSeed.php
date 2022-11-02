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
        Product::create(['type' => 'product', 'name' => 'Product 1', 'description' => 'This is Description for Product 1. You can edit products in Settings > Product & Services. ', 'tax_rate_id' => 1, 'unit_price' => 12.60]);

        Product::create(['type' => 'product', 'name' => 'Product 2', 'description' => 'This is Description for Product 2. You can edit products in Settings > Product & Services. ', 'tax_rate_id' => 2, 'unit_price' => 13.60]);

        Product::create(['type' => 'product', 'name' => 'Product 3', 'description' => 'This is Description for Product 3. You can edit products in Settings > Product & Services. ', 'tax_rate_id' => 1, 'unit_price' => 14.60]);

        Product::create(['type' => 'product', 'name' => 'Product 4', 'description' => 'This is Description for Product 4. You can edit products in Settings > Product & Services. ', 'tax_rate_id' => 2, 'unit_price' => 15.60]);

        Product::create(['type' => 'service', 'name' => 'Service 1', 'description' => 'This is Description for Service 1. You can edit services in Settings > Product & Services. ', 'tax_rate_id' => 1, 'unit_price' => 16.60]);

        Product::create(['type' => 'service', 'name' => 'Service 2', 'description' => 'This is Description for Service 6. You can edit services in Settings > Product & Services. ', 'tax_rate_id' => 2, 'unit_price' => 17.60]);

        Product::create(['type' => 'service', 'name' => 'Service 3', 'description' => 'This is Description for Service 7. You can edit services in Settings > Product & Services. ', 'tax_rate_id' => 1, 'unit_price' => 18.60]);

        Product::create(['type' => 'service', 'name' => 'Service 4', 'description' => 'This is Description for Service 8. You can edit services in Settings > Product & Services. ', 'tax_rate_id' => 2, 'unit_price' => 19.60]);
    }
}
