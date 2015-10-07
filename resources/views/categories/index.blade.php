@extends('layouts.application')

@section('title', 'Categories')
@endsection
@section('content')

<nav class="navbar navbar-inverse">
    <ul class="nav navbar-nav">
        <li>{!! HTML::link(url('categories'), 'View all categories') !!}</li>
        <li>{!! HTML::link(url('categories/create'), 'Create a category') !!}</a>
    </ul>
</nav>
<h2>ALL CATEGORIES</h2>
<div class="col-md-8">
    <ul class="">
    @foreach($categories as $key => $value)
        <li>
            <p>{{ $value->id }}</p>
            <p>{{ $value->name }}</p>
        </li>
    @endforeach
    </ul>
</div>
@endsection
