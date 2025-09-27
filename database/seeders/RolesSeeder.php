<?php

namespace Database\Seeders;

use App\Models\FranchiseeRoles\FranchiseeRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    public function run(): void
    {
        FranchiseeRole::create(
            [
                'role_name' => 'Admin'
            ]
        );

        FranchiseeRole::create(
            [
                'role_name' => 'User'
            ]
        );
    }
}
