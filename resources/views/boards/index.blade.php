@extends('boards.layout')

@section('content')

    <a href="/boards/create">글 쓰기</a>

    <a href="{{ route('boards.create') }}">글 쓰기</a>    

    <br/>

    @foreach($lists as $board) 
        <table border="1">
            <tr>
                <th>번호</th>
                <td>{{ $board->id }}</td>
            </tr>
            <tr>
                <th>제목</th>
                <td><a href="{{ route('boards.show', ['board' => $board->id]) }}">{{ $board->subject }}</a></td>
            </tr>
            <tr>
                <th>작성일</th>
                <td>{{ $board->created_at }}</td>
            </tr>
            <tr>
                <td><a href="{{ route('boards.edit', $board->id) }}">수정</a></td>
                <td>
                    <form action="{{ route('boards.destroy', $board->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="border:none; background:none; color:blue; cursor:pointer;">삭제</button>
                    </form>
                </td>
            </tr>
    @endforeach
      
@endsection