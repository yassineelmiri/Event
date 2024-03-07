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

        return view('client.create', compact('category'));
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
            'place_available' => 'required|integer|min:1',
            'date' => 'required|date',
            'category' => 'required|string',
            'location' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string|max:1000',
            'status' => 'required'
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

        $publication->delete();
        return to_route('admin.publication')->with('success', 'Publication a élé bien supprimer');

    }
    public function filter(Request $request)
    {
        $categoryId = $request->input('category');
        $category = Category::all();
        $categoryA = Category::all();
        $dateRange = $request->input('daterange');

        // Séparez la chaîne en deux parties distinctes
        $dates = explode(' - ', $dateRange);
       
        if ($categoryId && $dateRange) {
            $publication = Publication::where('category', $categoryId)
                ->where('date', '>=', $dates[0]) 
                ->where('date', '<=', $dates[1]) 
                ->get();
        } elseif ($categoryId) {
            $publication = Publication::where('category', $categoryId)->get();
        } elseif ($dateRange) {
            $publication = Publication::where('date', '>', $dates[0])
                ->where('date', '<', $dates[1])
                ->get();
        } else {
            $publication = Publication::all();
        }
        return view('visiteur.index', compact('publication', 'category', 'categoryA'));
    }

    public function filterPublications(Request $request)
    {
        $titel = $request->input('titel');
        $category = Category::all();
        $categoryA = Category::all();

        $publications = Publication::query();

        if ($titel) {
            $publications->where('titel', 'like', '%' . $titel . '%');
        }

        $publication = $publications->get();

        // Passer les données filtrées à votre vue et afficher les résultats
        return view('visiteur.index', compact('publication', 'category', 'categoryA'));
    }



}
