@extends('app')
@section('game_contents')
    <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
        <a href="{{ route('games.index') }} ">回去</a>
    </div>
    <table>
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
            <tr/>
        @endforeach
    </table>

@endsection
