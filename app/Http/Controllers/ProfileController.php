<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\Profile;
use App\Http\Controllers\Controller;
use App\Models\Publication;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profiles = Profile::where('id', Auth::id())->firstOrFail();
        $publication = Publication::where('profile_id', Auth::id())->get();
        $reservations = Reservation::where('profile_id', Auth::id())->get();
        $PublicationReservations = [];

        foreach ($reservations as $reservation) {
            $PublicationReservations[] = Publication::where('id', $reservation->publication_id)->first();
        }
        return view('client.index', compact('profiles', 'publication','reservations','PublicationReservations'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProfileRequest $request)
    {
        $formFields = $request->validated();
        $formFields['password'] = Hash::make($request->password);
        Profile::create($formFields);

        return redirect()->route('login.show')->with('success', 'votre Compte est bien créé.');
    }

    /**
     * Display the specified resource.
     */
    public function storee(Request $request)
    {


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Profile $profile)
    {
        $profile->delete();
        return to_route('profiles.index')->with('success', 'Le Profile a élé bien supprimer');
    }
}
