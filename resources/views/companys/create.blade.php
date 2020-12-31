@extends('app')

@section('title','建立遊戲公司表單')

@section('company_title','建立遊戲公司表單')

@section('company_contents')
    @include('message.glist')

    {!! Form::open(['url' => 'companys/store']) !!}

    @include('companys.form',['companybutton'=>"新增遊戲作品資料"])

    {!! Form::close() !!}
@endsection

{{--<div class="form-group">
    {!! Form::Label('cp_name', '製作公司:') !!}

    {!! Form::text('cp_name', null,['class'=> 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::Label('country', '國家:') !!}

    {!! Form::text('country', null,['class'=> 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('新增公司',null,['class'=>'form-control']) !!}
</div>--}}
