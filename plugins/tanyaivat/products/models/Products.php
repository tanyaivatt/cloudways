<?php namespace TanyaIvat\Products\Models;

use Model;

/**
 * Model
 */
class Products extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];
	

    /**
     * @var string The database table used by the model.
     */
    public $table = 'tanyaivat_products_list';
	
	protected $jsonable = ['job_date']; // форматування в json

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
