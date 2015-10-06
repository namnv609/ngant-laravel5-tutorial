@extends('layouts.application')

@section('title', 'Home | Admin')

@section('sidebar')
    @parent

    <header class="navbar navbar-fixed-top navbar-inverse">
        <div class="container">
            <a href="{{ url('/') }}" id="logo">News Page</a>
            <nav>
                <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li>
                        {!! HTML::link(url('auth/login'), 'Login') !!}
                    </li>
                @else
                    <li>
                        {!! HTML::link(url('auth/logout'), 'Logout') !!}
                    </li>
                @endif
                </ul>
            </nav>
        </div>
    </header>
@stop
