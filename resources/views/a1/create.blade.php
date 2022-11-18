@extends('layouts.app')
@section('content')
<form action="{{ route('a1.store') }}" method="post">
    @include('a1.form')
<button type="submit">投稿する</button>
<a href="{{ route('a1.index') }}">キャンセル</a>
</form>
@endsection()