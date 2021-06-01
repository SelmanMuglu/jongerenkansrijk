<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $medewerkers = User::all();
        return view('medewerker.index', ['medewerkers' => $medewerkers]);
    }

    public function create()
    {
        return view('medewerker.create');
    }

    public function store(User $medewerker)
    {
        request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'infix' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $medewerker->name = request('name');
        $medewerker->infix = request('name');
        $medewerker->last_name = request('name');
        $medewerker->password = request('password');
    }

    public function update()
    {

    }

    public function destroy()
    {

    }


}
