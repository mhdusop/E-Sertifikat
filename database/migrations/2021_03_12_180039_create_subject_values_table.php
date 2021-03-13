<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_values', function (Blueprint $table) {
            $table->uuid('uuid')->primary();
            $table->uuid('subject_uuid');
            $table->foreign('subject_uuid')->references('uuid')->on('subjects')->onDelete('cascade');
            $table->decimal('value', $precision = 8, $scale = 2);
            $table->string('alphabet',3);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subject_values');
    }
}
