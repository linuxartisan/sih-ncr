<?php

namespace App\Workers\Services;

use App\Company;
use App\Workers\Repositories\CompanyRepository;

class CompanyService extends Service
{
     /**
     * Delete an existing company record.
     *
     * @param \App\Company &$company
     * @return boolean or int
     */
    public function deleteCompany(Company &$company)
    {
        $repository = new CompanyRepository;
        return $repository->deleteCompany($company);
    }

    /**
     * Create and store a new company record.
     *
     * @param \App\Company &$company
     * @param array $input
     * @return boolean
     */
    public function storeCompany(Company &$company, $input)
    {
        $repository = new CompanyRepository;
        return $repository->storeCompany($company, $input);
    }

    /**
     * Update an existing company record.
     *
     * @param \App\Company &$company
     * @param array $input
     * @return boolean
     */
    public function updateCompany(Company &$company, $input)
    {
        $repository = new CompanyRepository;
        return $repository->updateCompany($company, $input);
    }

}
