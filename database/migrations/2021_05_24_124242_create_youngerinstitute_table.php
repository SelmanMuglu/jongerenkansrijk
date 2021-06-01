<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYoungerinstituteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('youngerinstitute', function (Blueprint $table) {
            $table->bigIncrements('youngerinstitute_id');

            $table->unsignedBigInteger('youth_id');
            $table->foreign('youth_id')
                ->references('youth_id')
                ->on('youth')
                ->onDelete('cascade');

            $table->unsignedBigInteger('institute_id');
            $table->foreign('institute_id')
                ->references('institute_id')
                ->on('institute')
                ->onDelete('cascade');

            $table->date('start_date');
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
        Schema::dropIfExists('youngerinstitute');
    }
}
