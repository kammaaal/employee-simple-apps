<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->bigInteger('division_id') 
            ->foreign('division_id')
            ->references('division_id')
            ->on('divisions');

            $table->string('nama', 100);
            $table->string('email', 255)->unique();
            $table->string('phone', 14);
            $table->string('password', 50);
            $table->text('gambar', 255);
            $table->date('dob');
            $table->date('regis_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
