<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'reviews';


    /*****************
     * Relations
     *****************/

   
    
     public function component()
    {
        return $this->belongsTo(Component::class);
    }
    
}
