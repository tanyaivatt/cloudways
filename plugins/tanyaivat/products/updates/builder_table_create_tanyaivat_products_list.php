<?php namespace TanyaIvat\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTanyaivatProductsList extends Migration
{
    public function up()
    {
        Schema::create('tanyaivat_products_list', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title', 255);
            $table->decimal('price', 10, 0);
            $table->decimal('old_price', 10, 0);
            $table->string('image', 255);
            $table->text('text');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tanyaivat_products_list');
    }
}
