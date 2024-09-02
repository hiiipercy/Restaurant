<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhyusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('whyuses', function (Blueprint $table) {
            $table->id();
            $table->string('section_name');
            $table->string('title',100);
            $table->string('subtitle');
            $table->string('list_1');
            $table->string('list_title_1');
            $table->string('list_description_1');
            $table->string('list_2');
            $table->string('list_title_2');
            $table->string('list_description_2');
            $table->string('list_3');
            $table->string('list_title_3');
            $table->string('list_description_3');
            $table->string('created_by')->nullable();
            $table->string('updated_by')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('whyuses');
    }
}
