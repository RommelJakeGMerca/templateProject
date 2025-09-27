<?php

namespace Database\Seeders;

use App\Models\Branches\Branch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchesSeeder extends Seeder
{
    public function run(): void
    {
        Branch::create(
            [
                'name'    => 'Branch A',
                'status'  => 'Accepts All Types of Appointment',
                'address' => 'Branch A Test Address'
            ]
        );

        Branch::create(
            [
                'name'    => 'Branch B',
                'status'  => 'Accepts All Types of Appointment',
                'address' => 'Branch B Test Address'
            ]
        );

        Branch::create(
            [
                'name'    => 'Branch C',
                'status'  => 'Accepts All Types of Appointment',
                'address' => 'Branch C Test Address'
            ]
        );

        Branch::create(
            [
                'name'    => 'Branch D',
                'status'  => 'Accepts All Types of Appointment',
                'address' => 'Branch D Test Address'
            ]
        );

        Branch::create(
            [
                'name'    => 'Branch E',
                'status'  => 'Accepts All Types of Appointment',
                'address' => 'Branch E Test Address'
            ]
        );

        Branch::create(
            [
                'name'    => 'Branch F',
                'status'  => 'Accepts All Types of Appointment',
                'address' => 'Branch F Test Address'
            ]
        );

        Branch::create(
            [
                'name'    => 'Branch G',
                'status'  => 'Accepts All Types of Appointment',
                'address' => 'Branch G Test Address'
            ]
        );

        Branch::create(
            [
                'name'    => 'Branch H',
                'status'  => 'Accepts All Types of Appointment',
                'address' => 'Branch H Test Address'
            ]
        );

        Branch::create(
            [
                'name'    => 'Branch I',
                'status'  => 'Accepts All Types of Appointment',
                'address' => 'Branch I Test Address'
            ]
        );

        Branch::create(
            [
                'name'    => 'Branch J',
                'status'  => 'Accepts All Types of Appointment',
                'address' => 'Branch J Test Address'
            ]
        );
    }
}
