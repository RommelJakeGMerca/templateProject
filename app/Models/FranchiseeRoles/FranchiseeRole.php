<?php

namespace App\Models\FranchiseeRoles;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FranchiseeRole extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_name'
    ];
}
