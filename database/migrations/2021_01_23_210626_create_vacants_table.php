<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVacantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        // Categories

        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });


        // Experience

        Schema::create('experiences', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });


        // Ubications

        Schema::create('ubications', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        // Salaries
        Schema::create('salaries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });


        // Vacants

        Schema::create('vacants', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->foreignId('experience_id')->constrained()->onDelete('cascade');
            $table->foreignId('ubication_id')->constrained()->onDelete('cascade');
            $table->foreignId('salary_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('vacants');
        Schema::dropIfExists('experiences');
        Schema::dropIfExists('ubications');
        Schema::dropIfExists('salaries');
        Schema::dropIfExists('categories');
    }
}
