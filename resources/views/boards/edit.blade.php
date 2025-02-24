@extends('boards.layout')

@section('content')
<form action="{{ route('boards.update', $board->id) }}" method="post">
    @csrf
    @method("PUT")
<table border="1">
    <tr>
        <th>제목</th>
        <td><input type="text" name="subject" value="{{ $board->subject }}" /></td>
    </tr>
    <tr>
        <th>내용</th>
        <td>
            <textarea name="contents" rows="5">{{ $board->contents }}</textarea>
        </td>
    </tr>
    <tr>
        <td>
            <button type="submit">저장</button>
        </td>
    </tr>
</table>
</form>
@endsection