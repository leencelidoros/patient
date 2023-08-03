<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('patients', function (Blueprint $table) {
        $table->id();
        $table->string('telephone');
        $table->string('name');
        $table->date('date_of_birth');
        $table->string('id_number');
        $table->string('address');
        $table->string('county');
        $table->string('sub_county');
        $table->string('email');
        $table->string('gender');
        $table->string('marital_status');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
