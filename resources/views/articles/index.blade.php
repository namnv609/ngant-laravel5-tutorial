@extends('layouts.application')

@section('title', 'Articles')
@endsection
@section('content')
<h2>ALL ARTICLES</h2>
<div class="col-md-8">
@if($articles->count())
@each('articles.article', $articles, 'article')
@else
    <div class="panel panel-default">
        <div class="panel-body">
            No articles found.
        </div>
    </div>
@endif
</div>
@endsection
