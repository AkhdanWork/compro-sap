<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalAccessTokensTable extends Migration
{
    public function up()
    {
        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->id();
            $table->string('tokenable_type', 191); // Batasi panjang kolom tokenable_type
            $table->bigInteger('tokenable_id');
            $table->string('name');
            $table->text('token');
            $table->timestamp('expires_at')->nullable();
            $table->timestamps();

            // Indeks untuk tokenable_type dan tokenable_id
            $table->index(['tokenable_type', 'tokenable_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('personal_access_tokens');
    }
}
