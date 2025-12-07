<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('home_contents', function (Blueprint $table) {
            // Remove the 'content' column
            $table->dropColumn('content');

            // Add 'client' and 'date' columns before 'image'
            $table->string('client')->after('title');
            $table->date('date')->nullable()->after('client'); // Make 'date' nullable if it's optional
            $table->string('image')->nullable()->change(); // Ensure 'image' can still be nullable
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('home_contents', function (Blueprint $table) {
            // Re-add the 'content' column
            $table->text('content')->after('title');

            // Drop 'client' and 'date' columns
            $table->dropColumn(['client', 'date']);
        });
    }
};
