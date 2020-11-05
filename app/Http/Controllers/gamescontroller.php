<?php

namespace App\Http\Controllers;

use App\Models\games;
use Illuminate\Http\Request;

class gamescontroller extends Controller
{
   public function index()

   {
       return view('games.index');
   }

    public function create()

    {
        return view('games.create');
    }

    public function edit($id)

    {
        $gema = games::find($id);
        if ($gema == null)
            return "No record";

        $games = $gema->toArray();
        return view('games.edit', $games);

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

        $games = games::find($id)->toArray();

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
        return view('games.index',$games);

    }

}
