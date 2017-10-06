<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->string('agency')->nullable()->default(null);
            $table->string('link')->nullable()->default(null);
            $table->integer('order')->nullable()->default(null);
            $table->string('month', 2);
            $table->string('year', 4);
            $table->text('description')->nullable()->default(null);
            $table->text('media')->nullable()->default(null);
            $table->timestamps();

            $table->index('name');
            $table->index('order');
            $table->index('slug');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portfolios');
    }
}
