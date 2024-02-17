<?php

use App\Models\Transaction;
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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('application_id')->constrained('applications')->onDelete('cascade');
            $table->decimal('total_amount', 10, 2);
            $table->string('tran_id')->unique();
            $table->string('cus_name');
            $table->string('cus_email');
            $table->text('cus_add1');
            $table->text('cus_add2')->nullable();
            $table->string('cus_city');
            $table->string('cus_state')->nullable();
            $table->string('cus_postcode')->nullable();
            $table->string('cus_country');
            $table->string('cus_phone');
            $table->string('cus_fax')->nullable();
            $table->string('shipping_method');
            $table->string('ship_name')->nullable();
            $table->text('ship_add1')->nullable();
            $table->text('ship_add2')->nullable();
            $table->string('ship_city')->nullable();
            $table->string('ship_state')->nullable();
            $table->string('ship_postcode')->nullable();
            $table->string('ship_country')->nullable();
            $table->string('value_a')->nullable();
            $table->string('value_b')->nullable();
            $table->string('value_c')->nullable();
            $table->string('value_d')->nullable();
            $table->string('status')->default(Transaction::INITIATED);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
