@extends('layouts.app')

@section('content')
<h1>詳細確認</h1>
<table class="table table-striped">
    <thead>
    <tr>
        <th>店名</th>
        <th>ジャンル</th>
        <th>画像</th>
        <th>評価</th>
        <th>コメント</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>{{ $book->book_id }}</td>
        <td>{{ $book->book_name }}</td>
        <td>{{ $book->created_at }}</td>
        <td>{{ $book->created_at }}</td>
        <td>{{ $book->created_at }}</td>
    </tr>
    </tbody>
</table>
@endsection