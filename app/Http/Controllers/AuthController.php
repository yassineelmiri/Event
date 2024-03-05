<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Publication;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
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
    public function Forgot()
    {
        return view('login.password');
    }
    public function ForgotPost(Request $request)
    {
        $request->validate([
            'email' => "required|email|exists:profiles",
        ]);

        $token = Str::random(64);
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send("login.forget-password",['token'=>$token],function($message)use ($request){
            $message->to($request->email);
            $message->subject("Reset Password");
            
        });

        return redirect()->to(route("Forgot"))->with("success","We have send an email to reset password .");
    }

    public function ResetPassword($token){ 
        return view('login.reset',compact('token'));
    }
    public function ResetPasswordPost(Request $request){
        $request->validate([
            "email" =>"required|email|exists:profiles",
            "password"=>"required|min:4|confirmed",
        ]);
        Profile::where("email",$request->email)->update(["password" => Hash::make($request->password)]);
        DB::table("password_resets")->where(["email"=>$request->email])->delete();

        // $updatePassword = DB::table('password_resets')->where([
        //     "email" => $request->email,
        //     "token"=> $request->token
        // ])->first();

        // if (!$updatePassword) {
        //     return redirect()->to(route('reset.password'))->with("error","Invalid");
        // }
        
        
        return redirect()->to(route('home'))->with('success','password reset success');

    }

    public function afficher()
    {
        $publication = Publication::paginate(8);
        return view('visiteur.index', compact('publication'));

    }
    public function show(Publication $publication)
    {
        return view('visiteur.show', compact('publication'));

    }
    public function detail(Publication $publication)
    {
        $profile = Profile::where('id', $publication->id)->firstOrFail();

        return view('visiteur.reservation', compact('publication', 'profile'));

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
