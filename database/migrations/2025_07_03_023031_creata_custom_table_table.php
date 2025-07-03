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
        Schema::create('custom_table', function (Blueprint $table) {
 $table->id();
 $table->string('field1');
 $table->string('field2');
 $table->text('description')->nullable();
 $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

    }
};
