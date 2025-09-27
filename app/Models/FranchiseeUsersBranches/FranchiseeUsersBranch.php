<?php

namespace App\Models\FranchiseeUsersBranches;

use App\Models\Branches\Branch;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FranchiseeUsersBranch extends Model
{
    use HasFactory;

    protected $table = 'franchisee_users_branches';

    protected $fillable = [
        'user_id',
        'branch_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id');
    }
}
