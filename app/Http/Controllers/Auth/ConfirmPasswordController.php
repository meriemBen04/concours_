<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ConfirmsPasswords;

class ConfirmPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Confirm Password Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password confirmations and
    | uses a simple trait to include the behavior. You're free to explore
    | this trait and override any functions that require customization.
    |
    */

    use ConfirmsPasswords;

    /**
     * Where to redirect users when the intended url fails.
     *
     * @var string
     */
    protected function redirectTo()
    {
    if (auth()->check()) {
        return auth()->user()->role === 'admin' ? '/admin/home' : 'user/home';
    }
    return '/login'; // Redirection par défaut si non authentifié
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //to protect routes and restrict access based on the currently authenticated user's
    public function __construct()
    {
        $this->middleware('auth');
        //The 'auth' middleware ensure that users must be authenticated
    }
}
