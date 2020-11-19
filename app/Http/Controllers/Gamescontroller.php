<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Carbon\Carbon;
use Illuminate\Http\Request;

class Gamescontroller extends Controller
{
   public function index()

   {
       $games = Game::all();

       return view('games.index',['games'=>$games]);
   }

    public function create()

    {
        $games=Game::create(['g_name'=>'masterhunter','g_producer'=>'Ryozo','g_company'=>'12','created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]);

        return view('games.create',$games->toArray());
    }

    public function edit($id)

    {
        $games=Game::findOrFail($id);
        $games->update(['g_name'=>'League of Legends']);
        $games->save();
        $games->toArray();

        return view('games.edit', $games);


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

        $games = Game::findOrFail($id)->toArray();

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
        return view('games.show',$games);

    }

}
