<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
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
    public function StorCategory(CategoryRequest $request)
    {
        $formFields = $request->validated();
        Category::create($formFields);    
        return redirect()->route('admin.categories')->with('success', 'votre categories est bien créé.');
    }
    public function CategorieDestroy(Category $category)
    {
        $category->delete();
        return to_route('admin.categories')->with('success', 'Le categories a élé bien supprimer');
    }
    public function ListPassword()
    {


        return to_route('admin.ListPassword')->with('success', 'Le categories a élé bien supprimer');
    }
    public function AdminPublication()
    {

        $publications = Publication::all();

        return view('admin.AdminPublication',compact('publications'));
    }
   public function ValiderEvent(publication $publication)
{
  
    $publication->update(['status' => 'validé']);

    return to_route('admin.publication')->with('success', 'Le Modification a élé bien valider');

}
public function ValiderNonEvent(publication $publication)
{
  
    $publication->update(['status' => 'Non validé']);

    return to_route('admin.publication')->with('success', 'Le Modification a élé bien valider');

}


}
