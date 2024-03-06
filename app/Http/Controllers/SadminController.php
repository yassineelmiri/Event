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
    public function Analytics()
    {
       $profiles = Profile::count();
       $categories = Category::count();
       $publication = Publication::count();
       $Admins = Profile::where('role', 'Administrateur')->get();
       
        return view('admin.Analytics', compact('profiles','categories','publication','Admins'));
    }
    public function categories()
    {
        $categories = Category::all();
        return view('admin.categorie',compact('categories'));
    }
    public function AjouterCategories()
    {
        return view('admin.AjouterCategories');
    }
    

}
