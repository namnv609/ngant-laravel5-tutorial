<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">{{ $article->title }}</h3>
    </div>

    <div class="panel-body">
        {{ $article->content }}
    </div>
    <div class="panel-body">
        <a href="{{ route('categories.articles.show', [$category->id, $article->id]) }}">View</a>
        <a href="{{ route('categories.articles.edit', [$category->id, $article->id]) }}">Edit</a>
        {!! Form::open([
            'url' => route('categories.articles.destroy', [$category->id, $article->id]),
            'method' => 'delete',
            'class' => 'pull-right'
        ]) !!}
            <button type="submit" class="btn btn-danger">Delete</button>
        {!! Form::close() !!}
    </div>
</div>
