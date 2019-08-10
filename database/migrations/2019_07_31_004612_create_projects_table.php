<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->enum('type', ['web', 'mobile', 'social', 'other']);
            $table->string('company');
            $table->integer('year');
            $table->text('main_description');
            $table->string('role_title');
            $table->text('url')->nullable();
            $table->text('role_description');
            $table->string('tile_image')->nullable();
            $table->string('logo_image')->nullable();
            $table->string('browser_image')->nullable();
            $table->string('screen_image')->nullable();
            $table->jsonb('features')->nullable();
            $table->jsonb('specs')->nullable();
            $table->jsonb('facts')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
