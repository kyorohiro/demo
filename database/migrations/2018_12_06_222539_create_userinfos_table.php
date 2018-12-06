<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userinfos', function (Blueprint $table) {
            $table->increments('id');
            $table->string("firstname",126);
            $table->string("lastname",126);
            $table->string("zip_code",32);
            $table->string("country_code", 8);
            $table->string("lang_code", 8);
            $table->string("prefucture",32);
            $table->string("address",32);
            $table->string("tel",32);
            $table->text("profile");
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
        Schema::dropIfExists('userinfos');
    }
}
