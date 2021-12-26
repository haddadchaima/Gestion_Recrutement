<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInterviewTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interview', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('time');
            $table->string('duration');
            $table->boolean('presence_confirmation');
            $table->enum('type', ['entretien', 'entretien Psyco-Technique', 'entretien-Technique']);
            $table->unsignedBigInteger('condidat_id');
            $table->unsignedBigInteger('recruiter_id');
            $table->foreign('condidat_id')->references('id')->on('condidat');
            $table->foreign('recruiter_id')->references('id')->on('recruiter');
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
        Schema::dropIfExists('interview');
    }
}
