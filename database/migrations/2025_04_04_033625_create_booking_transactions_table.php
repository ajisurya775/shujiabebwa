<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('booking_transactions', function (Blueprint $table) {
            $table->id();

            $table->string('booking_trx_id')->unique();
            $table->string('name');
            $table->string('phone_number');
            $table->string('email');
            $table->string('started_time');

            $table->date('schedule_at');
            $table->string('proof');
            $table->string('post_code');
            $table->string('city');
            $table->text('address');
            $table->decimal('subtotal', 14, 2);
            $table->decimal('total_amount', 14, 2);
            $table->decimal('total_tax_amount', 14, 2);
            $table->boolean('is_paid')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_transactions');
    }
};
