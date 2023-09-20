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
        Schema::create('customer_verifications', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamps();

            $table->string('name');
            $table->string('address');
            $table->string('job');
            $table->string('telp');
            $table->string('email');

            $table->foreignUuid('service_id')->constrained('services')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_verifications');
    }
};
