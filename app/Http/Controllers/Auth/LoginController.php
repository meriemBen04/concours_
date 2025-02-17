<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    // // Redirige l'utilisateur après connexion
    // protected $redirectTo = '/login'; // Redirection par défaut après la connexion

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // Afficher le formulaire de connexion
    public function showLoginForm()
    {
        return view('auth.login'); // Afficher la vue de connexion
    }

    // Authentifier l'utilisateur
    public function login(Request $request)
{
    // Valider les données
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Vérifier si l'email existe dans la base de données
    $user = User::where('email', $request->email)->first();

    if (!$user) {
        return redirect()->back()->withInput($request->only('email', 'remember'))
            ->withErrors(['email' => 'L\'adresse e-mail est incorrecte.']);
    }

    // Essayer de connecter l'utilisateur
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
        // Vérifier le rôle et rediriger
        return Auth::user()->role === 'admin' 
            ? redirect()->intended(route('admin.home')) 
            : redirect()->intended(route('user.home'));
    }

    // Si le mot de passe est incorrect
    return redirect()->back()->withInput($request->only('email', 'remember'))
        ->withErrors(['password' => 'Le mot de passe est incorrect.']);
}


    // Déconnexion
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
