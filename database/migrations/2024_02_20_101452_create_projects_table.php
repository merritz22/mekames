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
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('Project_CL_ID')->nullable();
            $table->longText('Project_Description')->nullable();
            $table->unsignedBigInteger('Project_Status_ID')->nullable();
            $table->boolean('Project_Billable')->nullable();
            $table->decimal('Project_Price')->nullable();
            $table->integer('Project_EstimatedTime')->nullable();
            $table->date('Project_EndDate')->nullable();
            $table->date('Project_DevBeginingDate')->nullable();
            $table->foreign('Project_CL_ID')->references('id')->on('clients');
            $table->foreign('Project_Status_ID')->references('id')->on('statuses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
