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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255);
            $table->string('contact_person_name', 255);
            $table->string('contact_person_email', 255);
            $table->string('country', 255);
            $table->string('business_type_name', 255)->nullable();
            $table->boolean('is_use_shipping_method')->default(false);
            $table->string('product_name', 255);
            $table->string('product_profile_name', 255);
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
