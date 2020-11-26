@extends('app')

@section('title','建立遊戲公司表單')

@section('company_title','建立遊戲公司表單')

@section('company_contents')

    {!! Form::open(['url' => 'companys/store']) !!}
    <div class="form-group">

        {!! Form::Label('cp_name', '製作公司:') !!}

        {!! Form::Label('cp_name', null,['class'=> 'form-control']) !!}

    </div>
    <div class="form-group">

        {!! Form::Label('country', '國家:') !!}

        {!! Form::Label('country', null,['class'=> 'form-control']) !!}

    </div>

    {!! Form::close() !!}

@endsection
