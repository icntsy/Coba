<?php

namespace App\Http\Controllers;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function greet(Request $request)
    {
        $userData = $request->only([
            'firstname',
            'lastname',
        ]);
        if (empty($userData['firstname']) && empty($userData['lastname'])) {
            return new \Exception('Missing data', 404);
        }
        return 'Halo ' . $userData['firstname'] . ' ' . $userData['lastname'];
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function show()
    {
        $user = User::first(); // Fetch the first user from the database

        return view('profile.index', compact('user'));
    }
    // public function readuser() {
    //     return view('livewire.auth.readuser');
    //     // return view('livewire.auth.readuser', compact("readuser"));
    // }
}
