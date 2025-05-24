<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia(
            'Listing/Index',
            [
                'listings' => Listing::all()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia('Listing/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'beds' => 'required|integer|min:1|max:20',
            'baths' => 'required|integer|min:1',
            'area' => 'required|integer|min:1',
            'city' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'code' => 'required|string|max:255',
            'street_nr' => 'required|integer|min:1',
            'price' => 'required|integer|min:1',
        ]);

        Listing::create($validated);
        session()->flash('success', 'Listing created successfully!');
        return Inertia::location(route('listing.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Listing $listing)
    {
        return Inertia::render('Listing/Show', [
            'listing' => $listing
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Listing $listing)
    {
        return inertia('Listing/Edit', [
            'listing' => $listing
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Listing $listing)
    {
        $validated = $request->validate([
            'beds' => 'required|integer|min:1',
            'baths' => 'required|integer|min:1',
            'area' => 'required|integer|min:1',
            'city' => 'required|string|max:255',
            'street' => 'required|string|max:255',
            'code' => 'required|string|max:255',
            'street_nr' => 'required|integer|min:1',
            'price' => 'required|integer|min:1',
        ]);

        $listing->update($validated);
        session()->flash('success', 'Listing updated successfully!');
        return Inertia::location(route('listing.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Listing $listing)
    {
        $listing->delete();

        return redirect()->back()->with('success','Listing was deleted');
    }
}
