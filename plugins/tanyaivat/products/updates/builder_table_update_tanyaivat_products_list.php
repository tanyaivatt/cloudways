<?php namespace TanyaIvat\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTanyaivatProductsList extends Migration
{
    public function up()
    {
        Schema::table('tanyaivat_products_list', function($table)
        {
            $table->string('slug', 255);
        });
    }
    
    public function down()
    {
        Schema::table('tanyaivat_products_list', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}