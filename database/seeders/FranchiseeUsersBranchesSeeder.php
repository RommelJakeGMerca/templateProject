<?php

namespace Database\Seeders;

use App\Models\FranchiseeUsersBranches\FranchiseeUsersBranch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FranchiseeUsersBranchesSeeder extends Seeder
{

    public function run(): void
    {
        FranchiseeUsersBranch::create(
            [
                'user_id'   => 2,
                'branch_id' => 1
            ]
        );

        FranchiseeUsersBranch::create(
            [
                'user_id'   => 2,
                'branch_id' => 2
            ]
        );

        FranchiseeUsersBranch::create(
            [
                'user_id'   => 2,
                'branch_id' => 3
            ]
        );

        FranchiseeUsersBranch::create(
            [
                'user_id'   => 2,
                'branch_id' => 4
            ]
        );

        FranchiseeUsersBranch::create(
            [
                'user_id'   => 2,
                'branch_id' => 5
            ]
        );

        FranchiseeUsersBranch::create(
            [
                'user_id'   => 1,
                'branch_id' => 6
            ]
        );

        FranchiseeUsersBranch::create(
            [
                'user_id'   => 1,
                'branch_id' => 7
            ]
        );

        FranchiseeUsersBranch::create(
            [
                'user_id'   => 1,
                'branch_id' => 8
            ]
        );

        FranchiseeUsersBranch::create(
            [
                'user_id'   => 1,
                'branch_id' => 9
            ]
        );

        FranchiseeUsersBranch::create(
            [
                'user_id'   => 1,
                'branch_id' => 10
            ]
        );
    }
}
