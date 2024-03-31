<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users,email',
            'Username' => 'required|unique:users,username',
            'Address' => 'required',
            'Phone' => 'required',
            'pass' => 'required|min:8',
        ], [
            'email.unique' => 'The email has already been taken.',
            'Username.unique' => 'The username has already been taken.',
            'pass.min' => 'The password must be at least 8 characters.',
        ]);

        if ($validator->fails()) {
            $errorMessages = $validator->errors()->getMessages();
            $customMessage = '';
            if(isset($errorMessages['email'])) {
                $customMessage = 'The email has already been taken.';
            } elseif(isset($errorMessages['Username'])) {
                $customMessage = 'The username has already been taken.';
            } elseif(isset($errorMessages['pass'])) {
                $customMessage = 'The password must be at least 8 characters.';
            }
            return redirect()->back()->with('customError', $customMessage)->withInput()->with('showSignUpForm', true);
        }


        $user = User::create([
            'email' => $request->email,
            'username' => $request->Username,
            'address' => $request->Address,
            'phoneNumber' => $request->Phone,
            'password' => Hash::make($request->pass),
        ]);

        // Log the user in or redirect to a specific page
        return redirect()->route('UserDash')->with('success', 'Account successfully created!');
    }
    public function UserDash ()
    {
        return view('UserDash/Dash');
    }

    public function login(Request $request)
    {
        $input = $request->all();

        // Validate the form data
        $this->validate($request, [
            'login'    => 'required',
            'password' => 'required|min:6'
        ]);

        $fieldType = filter_var($request->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $remember = $request->has('remember'); // Check if user selected the "Remember Me" checkbox

        if(Auth::attempt([$fieldType => $input['login'], 'password' => $input['password']], $remember)) // Pass the $remember variable
        {
            $user = Auth::user();

            if ($user->role == 1) {
                // If user is an admin, redirect to the admin dashboard
                return redirect()->route('AdminDash');
            } else {
                // Otherwise, redirect to the standard user dashboard
                return redirect()->route('UserDash');
            }
        }
        else
        {
            // Redirect back with input and a custom error message
            return back()->with('customError','These credentials do not match our records.')->withInput($request->only('login'));
        }
    }



    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
