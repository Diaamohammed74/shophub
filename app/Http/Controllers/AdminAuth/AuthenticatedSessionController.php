<?php

namespace App\Http\Controllers\AdminAuth;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Auth\LoginRequest;
use Laravel\Socialite\Facades\Socialite;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('dashboard.auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return to_route('dashboard.index');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return to_route('dashboard.login');
    }

        // Login with Social Media 
    public function socialLogin($provider){
        return Socialite::driver($provider)->redirect();
    }
    public function socialCallback($provider){
        $socialAccount = Socialite::driver($provider)->user();
        $socialAccountName=$socialAccount->name != null ?$socialAccount->name :$socialAccount->nickname;
        $user = User::updateOrCreate([
            'provider' => $provider,
            'provider_id' => $socialAccount->id,
        ],[
            'name' => $socialAccountName,
            'email' => $socialAccount->email,
        ]);
        Auth::login($user);
        return to_route('dashboard.index');
    }

}
