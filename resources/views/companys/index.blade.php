@extends('app')

@section('title','所有公司')

@section('company_title','顯示所有遊戲與公司')

@section('company_contents')
<table>
    <tr>
        <th>製作公司或工作室</th>
        <th>國家</th>
        <th>建立時間</th>
        <th>編輯時間</th>
        <th>操作1</th>
        <th>操作2</th>
    </tr>
    @foreach($companys as $company)
        <tr>
            <td>{{$company->cp_name}}</td>
            <td>{{$company->country}}</td>
            <td>{{$company->created_at}}</td>
            <td>{{$company->updated_at}}</td>
            <td><a href="{{ route('companys.show', ['id'=>$company->id]) }}">顯示</a></td>
            <td><a href="{{ route('companys.edit', ['id'=>$company->id]) }}">修改</a></td>
        </tr>
    @endforeach()
</table>

@endsection

