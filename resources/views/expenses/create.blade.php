<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create - Expenses</title>
</head>
<body style="display: flex; justify-content: center; flex-wrap: wrap; font-family: monospace; background-color: #ebebeb">
    <a style="position: absolute; top: 4px; left: 4px; background-color: lightblue; padding: 8px 20px; border-radius: 12px;" href="/expenses">Back</a>

    <form style="display: flex; justify-content: center; align-items: center; flex-direction: column; margin-top: 35px; background-color: lightgray; padding: 15px 35px; border-radius: 12px;"
        action="{{ route('expenses.store') }}" method="POST"
    >
        @csrf
        <label style="font-size: 2em; display: flex; justify-content: center; align-items: center; flex-direction: column; padding: 5px 10px;">
            Amount:
            <input name="amount" type="number" style="width: 200px; height: 30px; border-radius: 12px; border: 1px solid black;" value="{{ old('amount') }}">
        </label>
        <label style="font-size: 2em; display: flex; justify-content: center; align-items: center; flex-direction: column; padding: 5px 10px;">
            Date:
            <input name="date" type="date" style="width: 200px; height: 30px; border-radius: 12px; border: 1px solid black;" value="{{ old('date') }}">
        </label>
        <label style="font-size: 2em; display: flex; justify-content: center; align-items: center; flex-direction: column; padding: 5px 10px;">
            Category:
            <select name="category_id" style="font-family: monospace; width: 200px; height: 35px; border-radius: 12px; border: 1px solid black;" id="fruits" name="fruits">
                @foreach ($categories as $category)
                    <option style="font-family: monospace; color: {{ $category->hex_color }}" value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category["name"] }}</option>
                @endforeach
            </select>
        </label>
        <label style="font-size: 2em; display: flex; justify-content: center; align-items: center; flex-direction: column; padding: 5px 10px;">
            Notes:
            <input name="notes" type="string" style="width: 200px; height: 30px; border-radius: 12px; border: 1px solid black;" value="{{ old('notes') }}">
        </label>
        <button style="font-family: monospace; padding: 5px 10px; font-size: 1.2em; background-color: lightgreen; border: 1px solid black; border-radius: 12px; cursor: pointer">
            Create
        </button>
    </form>
</body>
</html>