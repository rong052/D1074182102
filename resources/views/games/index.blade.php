@extends('app')

@section('title','所有遊戲')

@section('game_title','顯示所有遊戲與公司')

@section('game_contents')
    <table>
        <a href="{{ route('games.create') }}">新增遊戲</a>
        <tr>
            <th>遊戲作品</th>
            <th>製作公司</th>
            <th>製作人</th>
            <th>建立時間</th>
            <th>編輯時間</th>
            <th>操作1</th>
            <th>操作2</th>
        </tr>
        @foreach($games as $game)
            <tr>
                <td>{{$game->g_name}}</td>
                <td>{{$game->g_company}}</td>
                <td>{{$game->g_producer}}</td>
                <td>{{$game->created_at}}</td>
                <td>{{$game->updated_at}}</td>
                <td><a href="{{ route('games.show', ['id'=>$game->id]) }}">顯示</a></td>
                <td><a href="{{ route('games.edit', ['id'=>$game->id]) }}">修改</a></td>
                <td>
                    <form action="{{url('/games/delete', ['id' => $game->id]) }}" method="post">
                        <input class="btn btn-default" type="submit" value="刪除" />
                        @method('delete')
                        @csrf
                    </form>
                <td>
            </tr>
        @endforeach()
    </table>

@endsection
