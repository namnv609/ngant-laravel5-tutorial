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
{!! Form::open(['action' => 'CategoryController@store']) !!}
<div class="form-group">
    {!! Form::label('Name') !!}
    {!! Form::text('name', null,[
        'required' => true,
        'class'=>'form-control',
        'placeholder'=>'name'
    ]) !!}
</div>
<div class="form-group">
    {!! Form::submit('Create',
        ['class'=>'btn btn-primary']) !!}
</div>
{!! Form::close() !!}
@endsection
