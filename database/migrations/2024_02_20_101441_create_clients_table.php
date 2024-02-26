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
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('Client_State_ID')->nullable();
            $table->string('Client_Name')->nullable();
            $table->longText('Client_Description')->nullable();
            $table->string('Client_Location')->nullable();
            $table->string('Client_Phone')->nullable();
            $table->date('Client_InscriptionDate')->nullable();
            $table->decimal('Client_SpendedMoney')->nullable();
            $table->timestamps();
            $table->foreign('Client_State_ID')->references('id')->on('states');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
