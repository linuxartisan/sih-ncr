<?php

namespace App\Workers\Services;

use App\Component;
use App\Workers\Repositories\ComponentRepository;

class ComponentService extends Service
{
     /**
     * Delete an existing component record.
     *
     * @param \App\Component &$component
     * @return boolean or int
     */
    public function deleteComponent(Component &$component)
    {
        $repository = new ComponentRepository;
        return $repository->deleteComponent($component);
    }

    /**
     * Create and store a new component record.
     *
     * @param \App\Component &$component
     * @param array $request
     * @return boolean
     */
    public function storeComponent(Component &$component, $request)
    {
        $repository = new ComponentRepository;
        return $repository->storeComponent($component, $request);
    }

    /**
     * Update an existing component record.
     *
     * @param \App\Component &$component
     * @param array $request
     * @return boolean
     */
    public function updateComponent(Component &$component, $request)
    {
        $repository = new ComponentRepository;
        return $repository->updateComponent($component, $request);
    }
    
      public function associateProducts(Component &$component, $input)
    {
        $repository = new ComponentRepository;
        return $repository->associateProducts($component, $input);
    }
    

}
