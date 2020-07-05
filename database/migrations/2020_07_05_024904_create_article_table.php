<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('user_id');
            $table->string('judul');
            $table->string('isi');
            $table->string('slug')->nullable();
            $table->string('tag');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        DB::unprepared('
        CREATE TRIGGER slug_generator BEFORE INSERT ON `article` FOR EACH ROW
            BEGIN
                set new.slug= lower(replace(new.judul," ","-")) ;
            END ;
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article');
        DB::unprepared('DROP TRIGGER `slug_generator`');
    }
}
