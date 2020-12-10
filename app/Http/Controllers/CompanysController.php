<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CompanysController extends Controller
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
        $company=Company::findOrFail($id);

        return view('companys.edit', ['company'=>$company]);

    }

    public function show($id)

    {

        $companys = Company::findOrFail($id);

        return view('companys.show',['cp_name'=>$companys->cp_name,'country'=>$companys->country]);
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
    public function update(Request $request, $id)
    {
        $company = Company::findOrFail($id);

        $company->cp_name = $request->input('cp_name');
        $company->country = $request->input('country');
        $company->save();
        return redirect('companys');

    }

    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        $company->delete();
        return redirect('companys');
    }
}
