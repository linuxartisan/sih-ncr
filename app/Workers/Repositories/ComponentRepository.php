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
    public function storeComponent(Component &$component, $request)
    {
        $this->populateFields($component, $request);
        
        $component->save();
        $imageName = $component->id . '.' . 
            $request->file('image')->getClientOriginalExtension();
       
        $image_path = storage_path() . '/app/public/images/component/';
        $request->file('image')->move($image_path, $imageName);
        

        $full_file_name = $image_path . $imageName;
        

        $component->image_path = $full_file_name;
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

   
    /****************************
     * Helper functions
     ****************************/

    /**
     * Populate the model's fields.
     *
     * @param  \App\Component  &$component
     * @param  array  $input
     */
    protected function populateFields(Component &$component, $request)
    {
        
        $component->name = $request->get('name');
        // $component->image_path = $input['image_path'];
        
    }

}
