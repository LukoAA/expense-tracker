<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index()
    {
        $expenses = auth()->user()->expenses()->latest('spent_on')->get();

        return view('expenses.index', ['expenses' => $expenses]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'description' => 'required|max:255',
            'amount' => 'required|numeric|min:0',
            'spent_on' => 'required|date',
        ]);

        auth()->user()->expenses()->create($validated);

        return redirect('/expenses');
    }
}