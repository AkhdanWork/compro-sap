<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFailedJobsTable extends Migration
{
    public function up()
    {
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('connection');
            $table->string('queue');
            $table->text('payload');
            $table->text('exception');
            $table->string('uuid', 191)->unique(); // Batasi panjang kolom uuid
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('failed_jobs');
    }
}
