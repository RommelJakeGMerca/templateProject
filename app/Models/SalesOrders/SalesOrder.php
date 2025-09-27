<?php

namespace App\Models\SalesOrders;

use App\Models\Bookings\Booking;
use App\Models\Branches\Branch;
use App\Models\Customers\Customer;
use App\Models\ProductBaskets\ProductBasket;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'branch_id',
        'customer_id',
        'booking_id',
        'reference_number',
        'invoice_number',
        'wax_amount',
        'subtotal',
        'discount_total',
        'grand_total',
        'status',
    ];

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id');
    }
}
