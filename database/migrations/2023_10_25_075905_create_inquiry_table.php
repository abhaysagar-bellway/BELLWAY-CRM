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
        Schema::create('inquiry', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('city');
            $table->string('contact_number');
            $table->string('domain');
            $table->string('email'); 
            $table->string('sector');
            $table->string('alternativenumber');
            $table->date('enquirydate');
            $table->string('alternativeemail');
            $table->string('publicity_medium');
            $table->string('address');
            $table->string('customer_answere');
            $table->string('state'); 
            $table->string('remarks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inquiry');
    }
};
