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
        Product::create(['name' => 'Product 1', 'description' => 'This is Description for Product 1. You can edit products in Settings > Product & Services. ']);

        Product::create(['name' => 'Product 2', 'description' => 'This is Description for Product 2. You can edit products in Settings > Product & Services. ']);

        Product::create(['name' => 'Product 3', 'description' => 'This is Description for Product 3. You can edit products in Settings > Product & Services. ']);

        Product::create(['name' => 'Product 4', 'description' => 'This is Description for Product 4. You can edit products in Settings > Product & Services. ']);

        Product::create(['name' => 'Product 5', 'description' => 'This is Description for Product 5. You can edit products in Settings > Product & Services. ']);

        Product::create(['name' => 'Product 6', 'description' => 'This is Description for Product 6. You can edit products in Settings > Product & Services. ']);

        Product::create(['name' => 'Product 7', 'description' => 'This is Description for Product 7. You can edit products in Settings > Product & Services. ']);

        Product::create(['name' => 'Product 8', 'description' => 'This is Description for Product 8. You can edit products in Settings > Product & Services. ']);
    }
}
