@extends('layouts.app')
@section('content')
<p><a href="{{ route('a1.create') }}">書く</a></p>
<h3>一覧</h3>
@foreach ($articles as $article)
<article class="article-item">
    <div class="article-title">
        <a href="{{ route('a1.show', $article) }}">{{ $article->title }}</a>
    </div>
    <div class="article-info">{{ $article->created_at }}</div>
</article>
@endforeach
@endsection()