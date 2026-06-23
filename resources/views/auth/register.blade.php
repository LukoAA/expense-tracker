@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <h1>Create an account</h1>

    @if ($errors->any())
        <ul class="errors">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/register" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name" value="{{ old('name') }}">
        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
        <input type="password" name="password" placeholder="Password">
        <input type="password" name="password_confirmation" placeholder="Confirm password">
        <button type="submit">Register</button>
    </form>

    <p class="muted" style="margin-top:16px">Already have an account? <a href="/login">Log in</a>.</p>
@endsection