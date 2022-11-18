@extends('layouts.app')
@section('content')
<form action="{{ route('a1.update', $article) }}" method="post">
    @method('patch')
    @include('a1.form')
    <button type="submit">更新する</button>
    <a href="{{ route('a1.show', $article) }}">キャンセル</a>
</form>
@endsection()