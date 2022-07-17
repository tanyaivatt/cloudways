<?php namespace TanyaIvat\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTanyaivatProductsOrders extends Migration
{
    public function up()
    {
        Schema::table('tanyaivat_products_orders', function($table)
        {
            $table->string('name');
            $table->string('email');
            $table->string('master');
        });
    }
    
    public function down()
    {
        Schema::table('tanyaivat_products_orders', function($table)
        {
            $table->dropColumn('name');
            $table->dropColumn('email');
            $table->dropColumn('master');
        });
    }
}
