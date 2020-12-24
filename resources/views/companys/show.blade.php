@extends('app')

@section('title','所有公司')

@section('company_title','這是預備顯示[單筆]公司的 view ')

@section('company_contents')

    公司編號：{{ $companys->id}}<br/>
    公司名稱：{{ $companys->cp_name}}<br/>
    國家：{{ $companys->country}}<br/>

<div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
        {{ $companys->cp_name }}所有遊戲
</div>
<table>
    <tr>
        <th>遊戲作品</th>
        <th>製作公司</th>
        <th>製作人</th>
        <th>建立時間</th>
        <th>編輯時間</th>
    </tr>

    @foreach($games as $game)
        <tr>
            <td>{{$game->g_name}}</td>
            <td>{{$game->g_company}}</td>
            <td>{{$game->g_producer}}</td>
            <td>{{$game->created_at}}</td>
            <td>{{$game->updated_at}}</td>
        </tr>
    @endforeach()
</table>

@endsection

