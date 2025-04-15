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
        Schema::create('layout_infos', function (Blueprint $table) {
            $table->id();
            $table->string('Tél_icon');
            $table->string('WhastApp_icon');
            $table->string('Instagram_icon');
            $table->string('Map_icon');
            $table->string('Footer_image');
            $table->string('Background_image');
            $table->string('title_image');
            $table->string('les_jus_et_les_boissons_et_froides_background');
            $table->string('les_jus_et_les_boissons_et_froides_title');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('layout_infos');
    }
};
