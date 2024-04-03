<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
        ]);
    }
    public function store()
    {
        $data = request()->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => ['required', 'email:dns', 'max:255', 'unique:users'],
            'password' => 'required|min:5|max:255'
        ]);
        $data['password'] = bcrypt($data['password']);
        User::create($data);
        return redirect('/login')->with('success', 'Registration successfull. Please login!');
    }
}
