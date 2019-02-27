<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'companies';


    /*****************
     * Relations
     *****************/

    /**
     * Get the products record associated with the company.
     */
    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
