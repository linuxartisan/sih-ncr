<?php

namespace App\Workers\Services;

use App\Product;
use App\Workers\Repositories\ProductRepository;

class ProductService extends Service
{
     /**
     * Delete an existing product record.
     *
     * @param \App\Product &$product
     * @return boolean or int
     */
    public function deleteProduct(Product &$product)
    {
        $repository = new ProductRepository;
        return $repository->deleteProduct($product);
    }

    /**
     * Create and store a new product record.
     *
     * @param \App\Product &$product
     * @param array $input
     * @return boolean
     */
    public function storeProduct(Product &$product, $input)
    {
        $repository = new ProductRepository;
        return $repository->storeProduct($product, $input);
    }

    /**
     * Update an existing product record.
     *
     * @param \App\Product &$product
     * @param array $input
     * @return boolean
     */
    public function updateProduct(Product &$product, $input)
    {
        $repository = new ProductRepository;
        return $repository->updateProduct($product, $input);
    }

}
