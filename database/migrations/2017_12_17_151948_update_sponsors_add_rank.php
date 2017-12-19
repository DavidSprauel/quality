<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateSponsorsAddRank extends Migration
{
    public function up()
    {
        Schema::table('sponsors', function(Blueprint $table) {
            $table->enum('rank', [
                'gold', 'bronze', 'silver'
            ])->after('picture');
        });
    }
    
    
    public function down()
    {
        Schema::table('sponsors', function(Blueprint $table) {
            $table->dropColumn('rank');
        });
    }
}
