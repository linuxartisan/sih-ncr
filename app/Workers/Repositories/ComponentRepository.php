<?php

namespace App\Workers\Repositories;

use App\Component;
use App\Workers\Helpers\Constants;

/**
* Repository for component
*/
class ComponentRepository extends Repository
{

    /**
     * Delete an component
     *
     * @param  \App\Component &$component
     * @return boolean
     */
    public function deleteComponent(Component &$component)
    {
        return $component->delete();
    }

    /**
    * Store a new component record.
    *
    * @param  \App\Component &$component
    * @param  array $input
    * @return boolean
    */
    public function storeComponent(Component &$component, $input)
    {
        $this->populateFields($component, $input);

        $status = $component->save();

        return $status;
    }

    /**
    * Update an existing component record.
    *
    * @param  \App\Component &$component
    * @param  array $input
    * @return boolean
    */
    public function updateComponent(Component &$component, $input)
    {
        $this->populateFields($component, $input);

        $status = $component->update();

        return $status;
    }

      public function associateProducts(Component &$component, $input)
    {
      
       
        $component->products()->sync($input['product_id']);
    }
   
    /****************************
     * Helper functions
     ****************************/

    /**
     * Populate the model's fields.
     *
     * @param  \App\Component  &$component
     * @param  array  $input
     */
    protected function populateFields(Component &$component, $input)
    {
        
        $component->name = $input['name'];
        $component->image_path = $input['image_path'];
        $component->lifetime = $input['lifetime'];
        
    }

    
}
