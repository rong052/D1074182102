<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CompanysController extends Controller
{
    public function index()
    {
        $companys = Company::allCompanys()->get();
        $countries = Company::allCountries()->get();
        $data = [];
        foreach ($countries as $country)
        {
            $data["$country->country"] = $country->country;
        }
        return view('companys.index',['companys'=>$companys, 'countries'=>$data]);

    }
    public function senior(Request $request)
    {
        $company = Company::Companys($request)->get();
        return view('companys.index',['companys'=>$company]);
    }

    public function country(Request $request)
    {
        $country = $request->input('country');
        $companys = Company::allCompanysByCountry($country)->get();
        $countries = Company::allCountries()->get();
        $data = [];
        foreach ($countries as $country)
        {
            $data["$country->country"] = $country->country;
        }
        return view('companys.index',['companys'=>$companys,'countries'=>$data]);
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
        $games = $companys->games;
        return view('companys.show',['companys'=>$companys,'games'=>$games]);
        /*return view('companys.show',['cp_name'=>$companys->cp_name,'country'=>$companys->country]);*/
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
