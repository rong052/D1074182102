<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Companyscontroller extends Controller
{
    public function index()

    {
        $companys = Company::all();

        return view('companys.index',['companys'=>$companys]);

    }

    public function create()

    {
        $companys=Company::create(['cp_name'=>'Rockstar Games','country'=>'美國','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);

        return view('companys.create',$companys->toArray());
    }

    public function edit($id)

    {
        $companys=Company::findOrFail($id);
        $companys->update(['cp_name'=>'Ubisoft']);
        $companys->save();
        $companys->toArray();

        return view('companys.edit', $companys);

    }

    public function show($id)

    {

        $companys = Company::findOrFail($id)->toArray();

        return view('games.index',$companys);
    }
}
