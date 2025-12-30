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
        Schema::table('attendance_employees', function (Blueprint $table) {

            // Change clock_in & clock_out to DATETIME
            $table->dateTime('clock_in')->change();
            $table->dateTime('clock_out')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('attendance_employees', function (Blueprint $table) {
            $table->time('clock_in')->change();
            $table->time('clock_out')->change();
        });

    }
};
