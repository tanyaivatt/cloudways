<?php namespace TanyaIvat\Products\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateTanyaivatProductsList2 extends Migration
{
    public function up()
    {
        Schema::table('tanyaivat_products_list', function($table)
        {
            $table->text('job_date');
        });
    }
    
    public function down()
    {
        Schema::table('tanyaivat_products_list', function($table)
        {
            $table->dropColumn('job_date');
        });
    }
}
