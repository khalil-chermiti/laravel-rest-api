<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id(); // id
            $table->timestamps(); // created_at and updated_at
            $table->string('title');
            $table->text('body');
        });

        // create table articles (
        //     id int unsigned auto_increment primary key,
        //     created_at timestamp null,
        //     updated_at timestamp null,
        //     title varchar(255) not null,
        //     body text not null
        //)
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
};
