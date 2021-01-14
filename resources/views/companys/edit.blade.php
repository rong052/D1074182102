@extends('app')

@section('title','編輯指定公司')

@section('company_title','編輯公司表單')

@section('company_contents')
    @include('message.glist')

    {!! Form::model($company, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\CompanysController@update', $company->id]]) !!}

    @include('companys.form', ['companybutton'=>'更新公司資料'])

    {!! Form::close() !!}
@endsection
