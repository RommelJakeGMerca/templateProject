<?php

namespace App\Models\ProductBaskets;

use App\Models\Branches\Branch;
use App\Models\Customers\Customer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductBasket extends Model
{
    use HasFactory;

    protected $fillable = [
        'branch_id',
        'customer_id',
        'total_price'
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
