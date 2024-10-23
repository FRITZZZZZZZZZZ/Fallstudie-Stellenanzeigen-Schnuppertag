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
        return view('category_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        $job_offer = new Job_offers();
        $job_offer->industry = request('industry');
        $job_offer->experience_level = request('experience');
        $job_offer->employement_type = request('employement');
        $job_offer->save();
        return view('category_create');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $job_offer = Job_offers::find($id);
        return view('category_show', ['job_offer' => $job_offer]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $job_offer = Job_offers::find($id);
        return view('category_edit', ['job_offer' => $job_offer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $job_offer = Job_offers::find($id);
        $job_offer->industry = request('industry');
        $job_offer->experience_level = request('experience_level');
        $job_offer->employement_type = request('employement_type');
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
