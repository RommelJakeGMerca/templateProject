<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sales_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('branch_id');
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('booking_id');
            $table->string('reference_number');
            $table->string('invoice_number');
            $table->integer('wax_amount');
            $table->double('subtotal', 10,2);
            $table->double('discount_total', 10,2);
            $table->double('grand_total', 10,2);
            $table->string('status');
            $table->timestamps();

            $table->foreign('branch_id')
                    ->references('id')
                    ->on('branches')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->foreign('customer_id')
                    ->references('id')
                    ->on('customers')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->foreign('booking_id')
                    ->references('id')
                    ->on('bookings')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_orders');
    }
};
