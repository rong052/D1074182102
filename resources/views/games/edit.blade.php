@extends('app')

@section('title','編輯指定遊戲作品')

@section('game_title','修改遊戲作品表單')

@section('game_contents')

    {!! Form::model($game,['method'=>'patch', 'action' => ['\App\Http\Controllers\GamesController@update', $game->id]]) !!}

    @include('games.form',['gamesbutton'=>"更新遊戲作品資料"])

    {!! Form::close() !!}

@endsection

