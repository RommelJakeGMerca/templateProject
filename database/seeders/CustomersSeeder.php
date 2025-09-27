<?php

namespace Database\Seeders;

use App\Models\Customers\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomersSeeder extends Seeder
{

    public function run(): void
    {
        Customer::create(
            [
                'full_name'  => 'Test Client A',
                'age'        => mt_rand(18, 70),
                'gender'     => ['male', 'female'][array_rand(['male', 'female'])]
            ]
        );

        Customer::create(
            [
                'full_name'  => 'Test Client B',
                'age'        => mt_rand(18, 70),
                'gender'     => ['male', 'female'][array_rand(['male', 'female'])]
            ]
        );

        Customer::create(
            [
                'full_name'  => 'Test Client C',
                'age'        => mt_rand(18, 70),
                'gender'     => ['male', 'female'][array_rand(['male', 'female'])]
            ]
        );

        Customer::create(
            [
                'full_name'  => 'Test Client D',
                'age'        => mt_rand(18, 70),
                'gender'     => ['male', 'female'][array_rand(['male', 'female'])]
            ]
        );

        Customer::create(
            [
                'full_name'  => 'Test Client E',
                'age'        => mt_rand(18, 70),
                'gender'     => ['male', 'female'][array_rand(['male', 'female'])]
            ]
        );

        Customer::create(
            [
                'full_name'  => 'Test Client F',
                'age'        => mt_rand(18, 70),
                'gender'     => ['male', 'female'][array_rand(['male', 'female'])]
            ]
        );

        Customer::create(
            [
                'full_name'  => 'Test Client G',
                'age'        => mt_rand(18, 70),
                'gender'     => ['male', 'female'][array_rand(['male', 'female'])]
            ]
        );

        Customer::create(
            [
                'full_name'  => 'Test Client H',
                'age'        => mt_rand(18, 70),
                'gender'     => ['male', 'female'][array_rand(['male', 'female'])]
            ]
        );

        Customer::create(
            [
                'full_name'  => 'Test Client I',
                'age'        => mt_rand(18, 70),
                'gender'     => ['male', 'female'][array_rand(['male', 'female'])]
            ]
        );

        Customer::create(
            [
                'full_name'  => 'Test Client J',
                'age'        => mt_rand(18, 70),
                'gender'     => ['male', 'female'][array_rand(['male', 'female'])]
            ]
        );
    }
}
