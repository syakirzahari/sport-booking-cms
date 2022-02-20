<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnStateIdToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->bigInteger('district_id')->nullable()->unsigned()->after('team_name');
            $table->bigInteger('state_id')->nullable()->unsigned()->after('district_id');
            $table->bigInteger('vendor_id')->nullable()->unsigned()->after('state_id');

            $table->foreign('district_id')->references('id')->on('xref_districts');
            $table->foreign('state_id')->references('id')->on('xref_states');
            $table->foreign('vendor_id')->references('id')->on('vendors');
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
            //
        });
    }
}
