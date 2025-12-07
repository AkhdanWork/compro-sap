<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdToPartnerContents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('partner_contents', function (Blueprint $table) {
            // Adding an auto-incrementing primary key
            $table->id()->first();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('partner_contents', function (Blueprint $table) {
            // Dropping the primary key if you need to rollback
            $table->dropColumn('id');
        });
    }
}

