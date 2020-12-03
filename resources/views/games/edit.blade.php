@extends('app')

@section('title','編輯指定遊戲作品')

@section('game_title','修改遊戲作品表單')

@section('game_contents')
    <div class="form-group">
        {!! Form::open(['url' => 'games/update/' . $id, 'method' => 'patch']) !!}
        {!! Form::Label('id', '遊戲編號:') !!}
        {!! Form::text('id',$id ,['class'=> 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::Label('g_name', '遊戲作品:') !!}

        {!! Form::text('g_name', $g_name ,['class'=> 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::Label('g_company', '製作公司:') !!}

        {!! Form::text('g_company', $g_company ,['class' =>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::Label('g_producer', '製作人:') !!}

        {!! Form::text('g_producer', $g_producer ,['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('修改遊戲',null,['class'=> 'btn btn-primary form-control'])!!}
    </div>
    {!! Form::close() !!}
@endsection
