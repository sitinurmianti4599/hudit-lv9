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
        Schema::create('submissions', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamps();

            $table->string('proof')->nullable();
            $table->enum('status', ['pending', 'progress', 'done'])->default('progress');
            $table->date('date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->date('done')->nullable();
            $table->text('information')->nullable();

            $table->foreignUuid('file_id')->constrained('files')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignUuid('customer_id')->constrained('customers')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('submissions');
    }
};
