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
        Schema::create('product_baskets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('branch_id');
            $table->unsignedBigInteger('customer_id');
            $table->double('total_price', 10,2);
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
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_baskets');
    }
};
