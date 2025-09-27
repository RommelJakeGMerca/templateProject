<?php

namespace Database\Seeders;

use App\Models\Packages\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackagesSeeder extends Seeder
{
    public function run(): void
    {
        Package::create(
            [
                'name' => 'Package A',
                'srp'  => mt_rand(800, 1000)
            ]
        );

        Package::create(
            [
                'name' => 'Package B',
                'srp'  => mt_rand(800, 1000)
            ]
        );

        Package::create(
            [
                'name' => 'Package C',
                'srp'  => mt_rand(800, 1000)
            ]
        );

        Package::create(
            [
                'name' => 'Package D',
                'srp'  => mt_rand(800, 1000)
            ]
        );

        Package::create(
            [
                'name' => 'Package H',
                'srp'  => mt_rand(800, 1000)
            ]
        );

        Package::create(
            [
                'name' => 'Package I',
                'srp'  => mt_rand(800, 1000)
            ]
        );

        Package::create(
            [
                'name' => 'Package J',
                'srp'  => mt_rand(800, 1000)
            ]
        );
    }
}
