<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateSponsorAddDescription extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sponsors', function(Blueprint $table) {
            $table->string('name')->after('rank');
            $table->text('description')->after('name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('sponsors', function(Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('description');
        });
    }
}
