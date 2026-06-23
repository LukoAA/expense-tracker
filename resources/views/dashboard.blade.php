@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1>Welcome, {{ auth()->user()->name }}!</h1>
    <p class="muted" style="margin:12px 0 20px">You are logged in.</p>

    <p><a href="/expenses">Go to my expenses →</a></p>

    <form action="/logout" method="POST" style="margin-top:20px">
        @csrf
        <button type="submit">Log out</button>
    </form>
@endsection