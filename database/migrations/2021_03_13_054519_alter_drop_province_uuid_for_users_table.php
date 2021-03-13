<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterDropProvinceUuidForUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['province_uuid']);
            $table->dropColumn(['province_uuid']);
            $table->dropForeign(['city_uuid']);
            $table->dropColumn(['city_uuid']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->uuid('province_uuid')->nullable()->after('uuid');
            $table->foreign('province_uuid')->references('uuid')->on('provinces')->onDelete('cascade');
            $table->uuid('city_uuid')->nullable()->after('province_uuid');
            $table->foreign('city_uuid')->references('uuid')->on('cities')->onDelete('cascade');
        });
    }
}
