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
        Schema::table('orders', function (Blueprint $table) {

            $table->decimal('price', 8, 2);
            $table->string('uName');
            $table->string('uEmail');
            $table->string('uPhone');
            $table->bigInteger('uActive');
            $table->string('pName');
            $table->string('pBrand');
            $table->string('pMaincat');
            $table->string('pSubcat');
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
