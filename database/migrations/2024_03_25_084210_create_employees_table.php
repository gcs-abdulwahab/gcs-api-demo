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

        // disable foreign key checks
        Schema::disableForeignKeyConstraints();

        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('salary')->default(1);
            // employee belongs to a department
            $table->foreignId('department_id')->constrained('departments');
            $table->string('designation')->default('Lecturer');

            // employee is a user
            $table->foreignId('user_id')->constrained('users');

            $table->timestamps();
        });

        // enable foreign key checks
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
