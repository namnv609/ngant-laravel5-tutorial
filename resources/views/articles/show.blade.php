@extends('layouts.application')

@section('title', 'Category')
@endsection
@section('content')
<h1>Show a Category</h1>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
@endif

@include('articles.article')
@endsection
