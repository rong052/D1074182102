@extends('app')

@section('title','編輯指定公司')

@section('company_title','編輯公司表單')

@section('company_contents')
    <div class="form-group">
        {!! Form::open(['url' => 'companys/update/' . $id, 'method' => 'patch']) !!}
        {!! Form::Label('id', '公司編號:') !!}
        {!! Form::text('id',$id ,['class'=> 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::Label('cp_name', '製作公司:') !!}

        {!! Form::text('cp_name', $cp_name,['class'=> 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::Label('country', '國家:') !!}

        {!! Form::text('country', $country,['class'=> 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('新增公司',null,['class'=>'form-control']) !!}
    </div>
    {!! Form::close() !!}
@endsection
