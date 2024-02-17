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
        Schema::create('application_transaction_urls', function (Blueprint $table) {
            $table->id();
            $table->foreignId('business_category_type_id')->constrained('business_category_types')->onDelete('cascade');
            $table->enum('category', ['success', 'cancel', 'fail', 'ipn']);
            $table->string('url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application_transaction_urls');
    }
};
