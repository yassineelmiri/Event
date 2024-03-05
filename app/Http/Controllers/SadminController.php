<?php

namespace App\Http\Controllers;

use App\Http\Requests\PublicationRequest;
use App\Models\Category;
use App\Models\Profile;
use App\Models\Publication;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SadminController extends Controller
{
    public function utilisateur()
    {
        $profiles =Profile::all();
        return view('admin.Utilisateur',compact('profiles'));
    }
}
