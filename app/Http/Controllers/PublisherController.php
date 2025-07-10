<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePublisherRequest;
use App\Http\Requests\UpdatePublisherRequest;
use App\Models\Publisher;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(StorePublisherRequest $request)
    {
        $validated = $request->validated();
        if ($request->hasFile('logoSide')) {
            $filePath = $request->file('logoSide')->store('publishers', 'public');
        }
        Publisher::create([
            'name' => $validated['name'],
            'logoSide' => $filePath,
            'address' => $validated['address'],
            'phone' => $validated['phone'],
            'fax' => $validated['fax'],
            'description' => $validated['description'],
          'isArchived' => $validated['isArchived'],

        ]);
        return redirect()->back();
    }
    public function ListOfPublishers(){
        $publishers = Publisher::get();
        return response()->json($publishers);

}

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePublisherRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Publisher $publisher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publisher $publisher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePublisherRequest $request, Publisher $publisher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publisher $publisher)
    {
        //
    }
}
