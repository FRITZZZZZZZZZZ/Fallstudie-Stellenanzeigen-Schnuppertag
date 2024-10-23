<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companys = company::all();
        return view('company', ['companys' => $companys]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('company_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $company = new company();
        $company->industry = request('industry');
        $company->experience_level = request('experience');
        $company->employement_type = request('employement');
        $company->save();
        return view('company_create');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $company = company::find($id);
        return view('company_show', ['company' => $company]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $company = company::find($id);
        return view('company_edit', ['company' => $company]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $company = company::find($id);
        $company->industry = request('industry');
        $company->experience_level = request('experience_level');
        $company->employement_type = request('employement_type');
        $company->save();
        return redirect('/company');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(company $company)
    {
        //
    }
}
