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
        Schema::create('home_infos', function (Blueprint $table) {
            $table->id();
            $table->string('whatsApp_Link');
            $table->string('facebook_Link');
            $table->string('instagram_Link');
            $table->string('tel_Link');
            $table->string('map_Link');
            $table->string('tel_1');
            $table->string('tel_2');
            $table->string('adress');
            $table->string('copyright');
            $table->string('location');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_infos');
    }
};
