@extends('app')

@section('title','建立遊戲作品表單')

@section('game_title','建立遊戲作品表單')

@section('game_contents')

    {!! Form::open(['url' => 'games/store']) !!}

    <div class="form-group">

        {!! Form::Label('g_name', '遊戲作品:') !!}

        {!! Form::Label('g_name', null,['class'=> 'form-control']) !!}

    </div>
    <div class="form-group">

        {!! Form::Label('g_company', '製作公司:') !!}

        {!! Form::Label('g_company', null,['class'=> 'form-control']) !!}

    </div>
    <div class="form-group">

        {!! Form::Label('g_producer', '製作人:') !!}

        {!! Form::Label('g_producer', null,['class'=> 'form-control']) !!}

    </div>


    {!! Form::close() !!}

@endsection
