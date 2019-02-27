<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'products';


    /*****************
     * Relations
     *****************/

    /**
     * Get the company record associated with the product.
     */
    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    /**
     * Get the components record associated with the product.
     */
    public function components()
    {
        return $this->belongsToMany(Component::class, 'product_component_assoc');
    }

}
