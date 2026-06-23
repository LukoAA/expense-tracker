@extends('layouts.app')

@section('title', 'Log in')

@section('content')
    <h1>Log in</h1>

    @if ($errors->any())
        <ul class="errors">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/login" method="POST">
        @csrf
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Log in</button>
    </form>

    <p class="muted" style="margin-top:16px">No account? <a href="/register">Register here</a>.</p>
@endsection