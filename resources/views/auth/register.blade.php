<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Register</title>
</head>
<body>
    <h1>Create an account</h1>

    @if ($errors->any())
        <ul style="color:red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/register" method="POST">
        @csrf
        <p><input type="text" name="name" placeholder="Name" value="{{ old('name') }}"></p>
        <p><input type="email" name="email" placeholder="Email" value="{{ old('email') }}"></p>
        <p><input type="password" name="password" placeholder="Password"></p>
        <p><input type="password" name="password_confirmation" placeholder="Confirm password"></p>
        <button type="submit">Register</button>
    </form>
</body>
</html>