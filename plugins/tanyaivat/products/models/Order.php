<?php namespace TanyaIvat\Products\Models;

use Model;

/**
 * Model
 */
class Order extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'tanyaivat_products_orders';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
