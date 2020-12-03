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
        /*
        $companys=Company::create(['cp_name'=>'Rockstar Games',
            'country'=>'美國',
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()]);
        */

        return view('companys.create');
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

        return view('companys.show',$companys);
    }

    public function store(Request $request)
    {
        $cp_name = $request->input('cp_name');
        $country = $request->input('country');
        Company::create([
            'cp_name' => $cp_name,
            'country' => $country,
            'created' => Carbon::now()
        ]);

        return redirect('companys');
    }
    public function  update($id, Request $request)
    {
        $company = Company::findOrFail($id);

        $company->cp_name = $request->input('cp_name');
        $company->country = $request->input('country');
        $company->save();
        return "更新一間遊戲公司";

    }

    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        $company->delete();
        return redirect('companys');
    }
}
