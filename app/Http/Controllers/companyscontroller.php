<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class companyscontroller extends Controller
{
    public function index()

    {
        return view('companys.index');

    }

    public function create()

    {
        return view('companys.create');
    }

    public function edit()

    {
        return view('companys.edit');

    }

    public function show()

    {
        return view('companys.show');
    }
}
