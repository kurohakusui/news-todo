@csrf 
<dl class="form-list">
    <dt>タイトル</dt>
    <dd><input type="text" name="title" value="{{ old('title', $article->title) }}"></dd>
    <dt>タグ</dt>
    <dd><input type="text" name="tag" value="{{ old('tag', $article->tag) }}"></dd>
    <dt>本文</dt>
    <dd><input name="url" type="text" value="{{ old('body', $article->url) }}"></input></dd>
</dl>