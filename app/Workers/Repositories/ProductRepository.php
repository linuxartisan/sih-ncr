<?php

namespace App\Workers\Repositories;

use App\Product;
use App\Workers\Helpers\Constants;

/**
* Repository for product
*/
class ProductRepository extends Repository
{

    /**
     * Delete an product
     *
     * @param  \App\Product &$product
     * @return boolean
     */
    public function deleteProduct(Product &$product)
    {
        return $product->delete();
    }

    /**
    * Store a new product record.
    *
    * @param  \App\Product &$product
    * @param  array $input
    * @return boolean
    */
    public function storeProduct(Product &$product, $input)
    {
        $this->populateFields($product, $input);

        $status = $product->save();

        return $status;
    }

    /**
    * Update an existing product record.
    *
    * @param  \App\Product &$product
    * @param  array $input
    * @return boolean
    */
    public function updateProduct(Product &$product, $input)
    {
        $this->populateFields($product, $input);

        $status = $product->update();

        return $status;
    }

   
    /****************************
     * Helper functions
     ****************************/

    /**
     * Populate the model's fields.
     *
     * @param  \App\Product  &$product
     * @param  array  $input
     */
    protected function populateFields(Product &$product, $input)
    {
        
        $product->name = $input['name'];
        $product->type = $input['type'];
        $product->image_path = $input['image_path'];
        $product->company_id = $input['company_id'];
        
    }

}
