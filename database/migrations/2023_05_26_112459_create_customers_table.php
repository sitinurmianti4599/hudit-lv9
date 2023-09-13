<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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

            $table->string("registration")->unique()->index();

            $table->string('photo')->nullable();
            $table->string('name');
            $table->string('address');
            $table->string('job');
            $table->string('telp');
            $table->integer('progress')->default(0);
            $table->enum('status', ['pending', 'progress', 'done'])->default('pending');
            // $table->date('order_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('order_date')->useCurrent();
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
