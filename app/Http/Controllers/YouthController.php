<?php

namespace App\Http\Controllers;

use App\Youth;
use Illuminate\Http\Request;

class YouthController extends Controller
{
    public function index()
    {
        $jongeren = Youth::all();
        return view('jongeren.index', ['jongeren' => $jongeren]);
    }

    public function create()
    {
        return view('jongeren.create');
    }

    public function store()
    {

    }

    public function edit()
    {

    }
    public function update()
    {

    }

    public function destroy()
    {

    }


}
