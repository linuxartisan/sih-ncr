<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'components';


    /*****************
     * Relations
     *****************/

    /**
     * Get the products record associated with the component.
     */
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_component_assoc');
    }
}
