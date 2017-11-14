<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdoptionImageTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //
        Schema::create('adoption_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('adoption_id');
            $table->string('filename');
            // i removed the 'birthday ' here , 'cause I think it's way woo complicated for users

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
    }
}
