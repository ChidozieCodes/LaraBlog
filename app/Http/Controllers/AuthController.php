<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    // Show Login Form
    public function showLogin()
    {
        return view('auth.login');
    }

    // Show Registration Form
    public function showRegister()
    {
        return view('auth.register');
    }

     // Handle Registration
     public function register(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
           'fullname' => 'required|string', // Full name is required and must be a string
           'email' => 'required|email|unique:users', // Email is required, must be valid, and unique in the users table
           'password' => 'required|min:6|same:password_confirmation', // Password is required, must be at least 6 characters, and match the confirmation
           'password_confirmation' => 'required' // Password confirmation is required
        ]);
 
        // Create a new user in the database
        $user = User::create([
           'full_name' => $request->fullname, // Assign the full name to the 'fullname' field
           'email' => $request->email, // Assign the email to the 'email' field
           'password' => Hash::make($request->password) // Hash the password before storing it
        ]);
 
        // Redirect to the login page with a success message
        return redirect('/login')->with('success', 'Registration successful. Please log in.');
    }

    // Handle Login
    public function login(Request $request)
    {
        // Validate login inputs
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Attempt to log the user in
        if (Auth::attempt($credentials)) {
            // Regenerate session to prevent fixation
            $request->session()->regenerate();

            // Redirect to intended page (or dashboard)
            return redirect()->intended('/dashboard')->with('success', 'Login successful!');
        }

        // If login fails
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Log out the user

        $request->session()->invalidate(); // Invalidate the session
        $request->session()->regenerateToken(); // Prevent CSRF attacks

        return redirect('/login')->with('success', 'You have been logged out.');
    }
}
