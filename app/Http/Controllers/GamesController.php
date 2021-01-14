<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateGamesRequest;
use App\Models\Company;
use App\Models\Game;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GamesController extends Controller
{
   public function index()
   {
       $games = Game::allGames()->get();
       $companys = Company::allCompanys()->get();
       $data = [];
       foreach ($companys as $company)
       {
           $data["$company->id"] = $company->cp_name;
       }

       return view('games.index',['games'=>$games, 'companys'=>$data]);
   }

    public function games()
    {
        return Game::all();
    }

    public function senior()
    {
        $games = Game::scopesenior()->get();
        $companys = Game::allcompanys()->get();
        $data =[];
        foreach ($companys as $company)
        {
            $data["$company->$company"] = $company->company;
        }

        return view('games.index',['game'=>$games, 'position'=>$data]);
   }
    public function company(Request $request)
    {
        $games = Game::allGamesByCompany($request->input('g_company'))->get();
        $companys = Company::allCompanys()->get();
        $data = [];
        foreach ($companys as $company)
        {
            $data["$company->id"] = $company->cp_name;
        }
        return view('games.index',['games'=>$games, 'companys'=>$data]);
    }

    public function create()

    {
       /* $games=Game::create(['g_name'=>'masterhunter',
       'g_producer'=>'Ryozo',
       'g_company'=>'12',
       'created_at'=>Carbon::now(),
       'updated_at'=>Carbon::now()]);
       */

        return view('games.create');
    }

    public function edit($id)

    {
        $games = Game::findOrFail($id);

        return view('games.edit',['game'=>$games]);


        /*$gema = games::find($id);
        if ($gema == null)
            return "No record";

        $games = $gema->toArray();
        return view('games.edit', $games);*/

        /*
        $data = [];
        if($id == 5)
        {
            $data['game_company']="Riot";  //$game_company="LHU"
            $data['game_producer']="xxx";  //$game_producer="123"
            $data['game_staff']="Loser";   //$game_staff="LINTINGHAN"
        }
        else
        {
            $data['game_company']="Whatever";      //$game_company="LHU"
            $data['game_producer']="Whatever";     //$game_producer="123"
            $data['game_staff']="Whatever";        //$game_staff="LINTINGHAN"
        }
        //$data=compact(varname: 'game_company' , 'game_producer' , 'game_staff');
        return view('games.edit',$data);
        */


    }

    public function show($id)

    {

        $game = Game::findOrFail($id);
        $company =Company::findOrFail($game->g_company);
        /*
        if($id == 5)
        {
            $game_company="Riot";
            $game_producer="xxx";
            $game_staff="Loser";
        }
        else
        {
            $game_company="Whatever";
            $game_producer="Whatever";
            $game_staff="Whatever";
        }
        return view('games.show')->with([ 'company'=>$game_company,'producer'=>$game_producer,'staff'=>$game_staff ]);
        */
        return view('games.show',['g_name' => $game->g_name, 'g_company' => $company->cp_name,'g_producer' => $game->g_producer]);

    }
    public function store(CreateGamesRequest $request)
    {
        $g_name = $request->input('g_name');
        $g_producer = $request->input('g_producer') ;
        $g_company = $request->input('g_company');

        Game::create([
            'g_name' =>$g_name,
            'g_producer' =>$g_producer,
            'g_company' => $g_company,
            'created' => Carbon::now()
        ]);

        return redirect('games');
    }


    public function delete(Request $request)
    {
        $game = Game::find($request->input('id'));

        if($game == null)
        {
            return response()->json([
                'status'=>0,
            ]);
        }

        if ($game ->delete())
        {
            return  response()->json([
                'status'=>1,
            ]);
        }
    }

    public function api_update(Request $request)
    {
        $games = Game::findOrFail($request->input('id'));

        $games->g_name = $request->input('g_name');
        $games->g_producer = $request->input('g_producer') ;
        $games->g_company = $request->input('g_company');
        if ($games->save())
        {
            return  response()->json([
                'status'=>1,
            ]);
        }
        return  response()->json([
            'status'=>0,
        ]);
    }

    public function update(CreateGamesRequest $request, $id)
    {
        $games = Game::findOrFail($id);

        $games->g_name = $request->input('g_name');
        $games->g_producer = $request->input('g_producer') ;
        $games->g_company = $request->input('g_company');
        $games->save();

        return redirect('games');
    }

    public function destroy($id)
    {
        $games = Game::findOrFail($id);
        $games->delete();
        return redirect('games');
    }
}
