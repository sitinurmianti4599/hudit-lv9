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
        Schema::create('customers', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamps();

            $table->uuid("registration")->unique()->index();

            $table->string('photo');
            $table->string('name');
            $table->string('address');
            $table->string('job');
            $table->string('telp');
            $table->integer('progress');
            $table->enum('status', ['progress', 'done']);
            $table->date('order_date');
            $table->date('done_date')->nullable();

            $table->foreignUuid('service_id')->constrained('services')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignUuid('service_type_id')->constrained('service_types')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
