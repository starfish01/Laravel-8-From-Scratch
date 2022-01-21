<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistrerController extends Controller
{
    //

    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $arributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|min:3',
            'email' => 'required|email|max:255',
            'password' => 'required|min:3|max:255',
        ]);

        User::create($arributes);

        return redirect('/');
    }
}
