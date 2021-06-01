<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateYouthactivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('youthactivity', function (Blueprint $table) {
            $table->bigIncrements('youthactivity_id');


            $table->unsignedBigInteger('youth_id');
            // Dit stukje code maakt de foreign key jongeren_id aan
            $table->foreign('youth_id')
                ->references('youth_id')
                ->on('youth')
                ->onDelete('cascade');

            $table->unsignedBigInteger('activity_id');
            $table->foreign('activity_id')
                ->references('activity_id')
                ->on('activities')
                ->onDelete('cascade');

            $table->date('start_date');
            $table->tinyInteger('completed');
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
        Schema::dropIfExists('youthactivity');
    }
}
