@extends('app')

@section('title','建立遊戲公司表單')

@section('game_title','建立遊戲公司表單')

@section('game_contents')

    {!! Form::open(['url' => 'games/store']) !!}

    @include('games.form',['gamesbutton'=>"新增遊戲作品資料"])

    {!! Form::close() !!}
@endsection
{{--<div class="form-group">
{!! Form::Label('g_name', '遊戲作品:') !!}

{!! Form::text('g_name', null,['class'=> 'form-control']) !!}
</div>
<div class="form-group">
{!! Form::Label('g_company', '製作公司:') !!}

{!! Form::text('g_company', null,['class' =>'form-control']) !!}
</div>
<div class="form-group">
{!! Form::Label('g_producer', '製作人:') !!}

{!! Form::text('g_producer', null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
{!! Form::submit('新增遊戲',null,['class'=> 'btn btn-primary form-control'])!!}
</div>--}}
