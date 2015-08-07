<?php namespace Stone\StaffPages\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateManagersTable extends Migration
{

    public function up()
    {
        Schema::create('stone_staffpages_managers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100)->nullable();
            $table->string('title', 150)->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stone_staffpages_managers');
    }

}
