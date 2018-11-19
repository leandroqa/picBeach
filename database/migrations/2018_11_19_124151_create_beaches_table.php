<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeachesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beaches', function (Blueprint $table) {
            $table->increments('id');
            $table->char('region_name',2);
            $table->string('name',100)->unique();
            $table->text('description')->nullable();
            $table->foreign('region_name')
                ->references('name')
                ->on('regions')
                ->onDelete('cascade');
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
        Schema::dropIfExists('beaches');
    }
}
