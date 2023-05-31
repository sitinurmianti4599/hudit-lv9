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
        Schema::create('service_file', function (Blueprint $table) {
            $table->foreignUuid('service_id')->constrained('services')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignUuid('file_id')->constrained('files')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_file');
    }
};
