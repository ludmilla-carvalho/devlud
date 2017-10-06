<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioSkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_skill', function (Blueprint $table) {
            $table->integer('skill_id')->unsigned();
            $table->integer('portfolio_id')->unsigned();

            $table->primary(['skill_id', 'portfolio_id']);

            $table->foreign('skill_id')->references('id')->on('skills')
                ->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('portfolio_id')->references('id')->on('portfolios')
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
        Schema::dropIfExists('portfolio_skill');
    }
}
