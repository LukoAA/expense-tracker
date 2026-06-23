<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Log in</title>
</head>
<body>
    <h1>Log in</h1>

    @if ($errors->any())
        <ul style="color:red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/login" method="POST">
        @csrf
        <p><input type="email" name="email" placeholder="Email" value="{{ old('email') }}"></p>
        <p><input type="password" name="password" placeholder="Password"></p>
        <button type="submit">Log in</button>
    </form>

    <p>No account? <a href="/register">Register here</a>.</p>
</body>
</html>