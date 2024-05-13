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
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('rowid');
            $table->string('firstLastName', 20);
            $table->string('secondLastName', 20);
            $table->string('firstName', 20);
            $table->string('otherNames', 50)->nullable();
            $table->string('country');
            $table->string('typeid');
            $table->string('id_number', 20);
            $table->string('email', 300);
            $table->date('datei');
            $table->string('area');
            $table->string('status');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
