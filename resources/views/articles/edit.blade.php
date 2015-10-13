@extends('layouts.application')

@section('title', 'Categories')
@endsection
@section('content')
<h1>Create a Category</h1>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif
{!! Form::model($article, [
    'action' => ['CategoryArticleController@update', $category->id, $article->id],
    'method' => 'patch'
]) !!}

<div class="form-group">
    {!! Form::label('Title') !!}
    {!! Form::text('title', null, [
        'required' => true,
        'class'=>'form-control'
    ]) !!}
</div>
<div class="form-group">
    {!! Form::label('Content') !!}
    {!! Form::text('content', null, [
        'required' => true,
        'class'=>'form-control'
    ]) !!}
</div>
<div class="form-group">
    {!! Form::submit('update',[
        'class'=>'btn btn-primary'
    ]) !!}
</div>
{!! Form::close() !!}
@endsection
