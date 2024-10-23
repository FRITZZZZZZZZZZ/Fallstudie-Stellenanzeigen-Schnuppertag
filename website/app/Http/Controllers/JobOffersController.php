<?php

namespace App\Http\Controllers;

use App\Models\job_offers;
use App\Http\Requests\Storejob_offersRequest;
use App\Http\Requests\Updatejob_offersRequest;

class JobOffersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $job_offers = Job_offers::all();
        return view('job_offer', ['job_offers' => $job_offers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('job_offer_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $job_offer = new Job_offers();
        $job_offer->company_id = request('company_id');
        $job_offer->titel = request('titel');
        $job_offer->applicant_id = request('applicant_id');
        $job_offer->category_id = request('category_id');
        $job_offer->location = request('location');
        $job_offer->responsibilities = request('responsibilities');
        $job_offer->requierements = request('requierements');
        $job_offer->save();
        return view('job_offer_create');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $job_offer = Job_offers::find($id);
        return view('job_offer_show', ['job_offer' => $job_offer]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $job_offer = Job_offers::find($id);
        return view('job_offer_edit', ['job_offer' => $job_offer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $job_offer = Job_offers::find($id);
        $job_offer->company_id = request('company_id');
        $job_offer->titel = request('titel');
        $job_offer->applicant_id = request('applicant_id');
        $job_offer->category_id = request('category_id');
        $job_offer->location = request('location');
        $job_offer->responsibilities = request('responsibilities');
        $job_offer->requierements = request('requierements');
        $job_offer->save();
        return redirect('/job_offer');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job_offers $job_offer)
    {
        //
    }
}
