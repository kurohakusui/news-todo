@extends('layouts.app')
@section('content')
<article class="article-detail">
    <h1 class="article-title">{{ $article->title }}</h1>
    <div class="article-info">{{ $article->tag }}</div>
    <div class="article-info">{{ $article->url }}</div>
    <div class="article-info">{{ $article->created_at }}</div>
    <div class="article-body">{!! nl2br(e($article->body)) !!}</div>
    <div class="article-control">
        <a href="{{ route('a1.edit', $article) }}">編集</a>
    </div>
    <form action="{{ route('a1.destroy', $article) }}" method="post">
            @csrf 
            @method('delete')
            <button type="submit">削除</button>
        </form>
</article>
@endsection