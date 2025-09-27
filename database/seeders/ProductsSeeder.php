<?php

namespace Database\Seeders;

use App\Models\Products\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create(
            [
                'name' => 'Product A',
                'srp'  => mt_rand(150, 1000)
            ]
        );

        Product::create(
            [
                'name' => 'Product B',
                'srp'  => mt_rand(150, 1000)
            ]
        );

        Product::create(
            [
                'name' => 'Product C',
                'srp'  => mt_rand(150, 1000)
            ]
        );

        Product::create(
            [
                'name' => 'Product D',
                'srp'  => mt_rand(150, 1000)
            ]
        );

        Product::create(
            [
                'name' => 'Product E',
                'srp'  => mt_rand(150, 1000)
            ]
        );

        Product::create(
            [
                'name' => 'Product F',
                'srp'  => mt_rand(150, 1000)
            ]
        );

        Product::create(
            [
                'name' => 'Product G',
                'srp'  => mt_rand(150, 1000)
            ]
        );

        Product::create(
            [
                'name' => 'Product H',
                'srp'  => mt_rand(150, 1000)
            ]
        );

        Product::create(
            [
                'name' => 'Product I',
                'srp'  => mt_rand(150, 1000)
            ]
        );

        Product::create(
            [
                'name' => 'Product J',
                'srp'  => mt_rand(150, 1000)
            ]
        );
    }
}
