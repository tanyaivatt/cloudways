<?php namespace TanyaIvat\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateTanyaivatProductsOrders extends Migration
{
    public function up()
    {
        Schema::create('tanyaivat_products_orders', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('service');
            $table->date('date');
            $table->time('time');
            $table->boolean('status')->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('tanyaivat_products_orders');
    }
}