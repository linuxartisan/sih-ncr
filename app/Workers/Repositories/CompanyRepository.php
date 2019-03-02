<?php

namespace App\Workers\Repositories;

use App\Company;
use App\Workers\Helpers\Constants;

/**
* Repository for company
*/
class CompanyRepository extends Repository
{

    /**
     * Delete an company
     *
     * @param  \App\Company &$company
     * @return boolean
     */
    public function deleteCompany(Company &$company)
    {
        return $company->delete();
    }

    /**
    * Store a new company record.
    *
    * @param  \App\Company &$company
    * @param  array $input
    * @return boolean
    */
    public function storeCompany(Company &$company, $input)
    {
        $this->populateFields($company, $input);

        $status = $company->save();

        return $status;
    }

    /**
    * Update an existing company record.
    *
    * @param  \App\Company &$company
    * @param  array $input
    * @return boolean
    */
    public function updateCompany(Company &$company, $input)
    {
        $this->populateFields($company, $input);

        $status = $company->update();

        return $status;
    }

   
    /****************************
     * Helper functions
     ****************************/

    /**
     * Populate the model's fields.
     *
     * @param  \App\Company  &$company
     * @param  array  $input
     */
    protected function populateFields(Company &$company, $input)
    {
        
        $company->name = $input['name'];
    }

}
