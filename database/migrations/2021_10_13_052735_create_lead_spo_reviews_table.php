<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadSpoReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lead_spo_reviews', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('SPO');
            $table->integer('star')->comment('1,2,3,4,5 start');
            $table->string('comment')->nullable();
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
        Schema::dropIfExists('lead_spo_reviews');
    }
}
