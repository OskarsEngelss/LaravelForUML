<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ExpenseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $expenses = Expense::all();

        return view('expenses.index', compact('expenses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('expenses.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'amount' => ['required', 'integer', 'min:1'],
            'date' => ['required', 'date'],
            'category_id' => ['required', 'exists:categories,id'],
            'notes' => ['string', 'max:1000'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->with('status', "Input can't be empty!");
        }

        $expense = new Expense();
        $expense->amount = $request['amount'];
        $expense->date = $request['date'];
        $expense->notes = $request['notes'];
        $expense->category_id = $request['category_id'];

        $expense->save();

        return redirect()->route('expenses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Expense $expense)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Expense $expense)
    {
        $categories = Category::all();

        return view('expenses.edit', compact('categories', 'expense'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Expense $expense)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Expense $expense)
    {
        //
    }
}
