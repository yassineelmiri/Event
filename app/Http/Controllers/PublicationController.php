<?php

namespace App\Http\Controllers;

use App\Http\Requests\PublicationRequest;
use App\Models\Category;
use App\Models\Publication;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::all();
      
        return view('client.create',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $formFields = $request->validate([
            'titel' => 'required|string|max:255',
            'places_available' => 'required|integer|min:1',
            'date' => 'required|date',
            'category' => 'required|string',
            'location' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string|max:1000',
        ]);

        $this->uploadImage($request, $formFields);
        $formFields['profile_id'] = auth()->id();
        Publication::create($formFields);

        return redirect()->route('home')->with('success', 'Votre publication a bien été créée.');
    }



    private function uploadImage(Request $request, array &$formFields)
    {
        unset($formFields['image']);
        if ($request->hasfile('image')) {
            $formFields['image'] = $request->file('image')->store('profile', 'public');
        }
    }

    /**
     * Display the specified resource.
     */
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publication $publication)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PublicationRequest $request, Publication $publication)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publication $publication)
    {

    }
}
