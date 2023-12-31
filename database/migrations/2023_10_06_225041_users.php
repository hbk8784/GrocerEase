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
        Schema::create('users', function(Blueprint $table){
                  $table->id('id');
                  $table->string('firstName');
                  $table->string('lastName');
                  $table->string('gender');
                  $table->date('dob');
                  $table->string('email')->unique();
                  $table->string('phone')->unique();
                  $table->string('address');
                  $table->string('userName');
                  $table->string('password');
                  $table->integer('role');
                  $table->integer('active');
                  $table->timestamps();

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
