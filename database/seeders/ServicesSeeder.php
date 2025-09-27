<?php

namespace Database\Seeders;

use App\Models\Services\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create(
            [
                'name' => 'Service A',
                'srp'  => mt_rand(300, 500)
            ]
        );

        Service::create(
            [
                'name' => 'Service B',
                'srp'  => mt_rand(300, 500)
            ]
        );

        Service::create(
            [
                'name' => 'Service C',
                'srp'  => mt_rand(300, 500)
            ]
        );

        Service::create(
            [
                'name' => 'Service D',
                'srp'  => mt_rand(300, 500)
            ]
        );

        Service::create(
            [
                'name' => 'Service E',
                'srp'  => mt_rand(300, 500)
            ]
        );

        Service::create(
            [
                'name' => 'Service F',
                'srp'  => mt_rand(300, 500)
            ]
        );

        Service::create(
            [
                'name' => 'Service G',
                'srp'  => mt_rand(300, 500)
            ]
        );

        Service::create(
            [
                'name' => 'Service H',
                'srp'  => mt_rand(300, 500)
            ]
        );

        Service::create(
            [
                'name' => 'Service I',
                'srp'  => mt_rand(300, 500)
            ]
        );

        Service::create(
            [
                'name' => 'Service j',
                'srp'  => mt_rand(300, 500)
            ]
        );
    }
}
