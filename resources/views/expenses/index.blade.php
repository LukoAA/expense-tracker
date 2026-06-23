<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My Expenses</title>
</head>
<body>
    <h1>{{ auth()->user()->name }}'s Expenses</h1>

    <p>
        <a href="/dashboard">Dashboard</a> |
        <form action="/logout" method="POST" style="display:inline">
            @csrf
            <button type="submit">Log out</button>
        </form>
    </p>

    @if ($errors->any())
        <ul style="color:red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/expenses" method="POST">
        @csrf
        <input type="text" name="description" placeholder="What did you buy?" value="{{ old('description') }}">
        <input type="number" step="0.01" name="amount" placeholder="Amount" value="{{ old('amount') }}">
        <input type="date" name="spent_on" value="{{ old('spent_on') }}">
        <button type="submit">Add Expense</button>
    </form>

    <<ul>
        @forelse ($expenses as $expense)
            <li>
                {{ $expense->spent_on->format('M j, Y') }} —
                {{ $expense->description }}:
                ${{ number_format($expense->amount, 2) }}

                <form action="/expenses/{{ $expense->id }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @empty
            <li>No expenses yet.</li>
        @endforelse
    </ul>

    <p><strong>Total: ${{ number_format($total, 2) }}</strong></p>
</body>
</html>