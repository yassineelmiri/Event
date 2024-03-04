<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Publication;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login.index');
    }
    public function Forgot(){
        return view('login.password');
    }
    public function ForgotPost(Request $request){
        $request->validate([
            'email'=>"required|email|exists:profiles",
        ]);
        
        $token = Str::random(64);
        

    }

    public function afficher()
    {
       $publication = Publication::paginate(8);
        return view('visiteur.index',compact('publication'));

    }
    public function show(Publication $publication)
    {
        return view('visiteur.show',compact('publication'));

    }
    public function detail(Publication $publication)
    {
        $profile = Profile::where('id',$publication->id)->firstOrFail();

        return view('visiteur.reservation',compact('publication','profile'));

    }


    public function login(Request $request)
    {
        $login = $request->email;
        $password = $request->password;
        $credentials = ['email' => $login, 'password' => $password];
        if (Auth::attempt($credentials)) {

            switch (auth()->user()->role) {
                case "Utilisateur":
                    $request->session()->regenerate();
                    return redirect()->route('profiles.index')->with('success', 'Vous êtes bien connecté ' . $login . ".");
                    break;
                    
                case 'Organisateur':
                    $request->session()->regenerate();
                    return redirect()->route('profiles.index')->with('success', 'Vous êtes bien connecté ' . $login . ".");
                    break;

                case 'Administrateur':
                    $request->session()->regenerate();
                    return redirect()->route('admin.index')->with('success', 'Vous êtes bien connecté ' . $login . ".");
                    break;

                default:
                    return back()->withErrors([
                        'email' => 'Email ou mot de passe incorrect'
                    ])->onlyInput('email');
            }
        } else {
            return back()->withErrors([
                'email' => 'Email ou mot de passe incorrect'
            ])->onlyInput('email');
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return to_route('login.show')->with('success', 'Vous étes bien déconnecté.');
    }
}
