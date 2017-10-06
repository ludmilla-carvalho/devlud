<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCertificateSkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificate_skill', function (Blueprint $table) {
            $table->integer('skill_id')->unsigned();
            $table->integer('certificate_id')->unsigned();

            $table->primary(['skill_id', 'certificate_id']);

            $table->foreign('skill_id')->references('id')->on('skills')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('certificate_id')->references('id')->on('certificates')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('certificate_skill');
    }
}
