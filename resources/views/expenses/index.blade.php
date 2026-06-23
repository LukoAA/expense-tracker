@extends('layouts.app')

@section('title', 'My Expenses')

@section('content')
    <div class="topnav">
        <h1>{{ auth()->user()->name }}'s Expenses</h1>
        <form action="/logout" method="POST" class="logout-inline">
            @csrf
            <button type="submit">Log out</button>
        </form>
    </div>

    @if ($errors->any())
        <ul class="errors">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/expenses" method="POST" class="add-form">
        @csrf
        <input type="text" name="description" placeholder="What did you buy?" value="{{ old('description') }}">
        <input type="number" step="0.01" name="amount" placeholder="Amount" value="{{ old('amount') }}">
        <input type="date" name="spent_on" value="{{ old('spent_on') }}">
        <button type="submit">Add</button>
    </form>

    <ul class="expense-list">
        @forelse ($expenses as $expense)
            <li class="expense-item">
                <span class="expense-date">{{ $expense->spent_on->format('M j, Y') }}</span>
                <span class="expense-desc">{{ $expense->description }}</span>
                <span class="expense-amount">${{ number_format($expense->amount, 2) }}</span>
                <form action="/expenses/{{ $expense->id }}" method="POST" class="logout-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn-delete">Delete</button>
                </form>
            </li>
        @empty
            <li class="empty">No expenses yet — add your first one above.</li>
        @endforelse
    </ul>

    <div class="total"><strong>Total: ${{ number_format($total, 2) }}</strong></div>
@endsection