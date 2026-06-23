<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Dashboard</title>
</head>
<body>
    <h1>Welcome, {{ auth()->user()->name }}!</h1>
    <p>You are logged in.</p>

    <form action="/logout" method="POST">
        @csrf
        <button type="submit">Log out</button>
    </form>
</body>
</html>