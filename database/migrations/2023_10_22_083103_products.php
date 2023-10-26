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
        Schema::create('products', function (Blueprint $table) {
            $table->id('pid');
            $table->string('name');
            $table->string('desc');
            $table->string('maincat');
            $table->string('subcat');
            $table->string('brand');
            $table->string('weight');
            $table->integer('status');
            $table->decimal('price', 8, 2);
            $table->string('image');
            $table->integer('qty');
            $table->timestamps();
            $table->bigInteger('sid');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
