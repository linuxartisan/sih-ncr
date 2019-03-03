<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'forums';


    /*****************
     * Relations
     *****************/

    /**
     * Get the component record associated with the product.
     */
    public function component()
    {
        return $this->belongsTo(Component::class);
    }

    

}
