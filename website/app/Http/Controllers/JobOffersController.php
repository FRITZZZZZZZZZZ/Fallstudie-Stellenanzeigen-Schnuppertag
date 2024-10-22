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
        $job_offers = job_offers::all();
        return view('job_offer', ['job_offers' => $job_offers]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storejob_offersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(job_offers $job_offers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(job_offers $job_offers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updatejob_offersRequest $request, job_offers $job_offers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(job_offers $job_offers)
    {
        //
    }
}
