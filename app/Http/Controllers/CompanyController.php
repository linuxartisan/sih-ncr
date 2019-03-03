<?php

namespace App\Http\Controllers;

use App\Company;
use App\Http\Requests\CompanyRequest;
use App\Workers\Services\CompanyService;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class CompanyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('role:admin', ['only' => ['create', 'store', 'edit', 'update', 'destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $companies = Company::all();
        return view('company.list', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\CompanyRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CompanyRequest $request)
    {
        $input = $request->all();
        
        $companies = new Company;

        $service = new CompanyService;
        $status = $service->storeCompany($companies, $input);

        if($status) {
            Session::flash('success', 'Company created successfully.');
        } else {
            Session::flash('error', 'Failed to create Company. Please try again.');
        }

        return redirect(action('CompanyController@index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
       return view(
            'company.edit',
            compact('company')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\CompanyRequest  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(CompanyRequest $request, Company $company)
    {
        $input = $request->all();

        $service = new CompanyService;
        $status = $service->updateCompany($company, $input);

        if($status) {
            Session::flash('success', 'Company updated successfully.');
        } else {
            Session::flash('error', 'Failed to update Company. Please try again.');
        }

        return redirect(action('CompanyController@edit', $company->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        $service = new CompanyService;
        $status = $service->deleteCompany($company);

        if($status) {
            Session::flash('success', 'Company deleted successfully.');
        } else {
            Session::flash('error', 'Failed to delete Company. Please try again.');
        }

        return redirect(action('CompanyController@index'));
    }
}
