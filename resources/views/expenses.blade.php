<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expenses</title>
</head>
<body style="display: flex; justify-content: center; flex-wrap: wrap">
    @foreach ($expenses as $expense)
        <div style="border: 1px solid black; margin: 7px 10px; width: fit-content; padding: 3px 6px">
            <p>Date: <span style="font-weight: 600">{{ $expense["date"] }}</span></p>
            <p>Amount: <span style="font-weight: 600">{{ $expense["amount"] }}$</span></p>
            <p style="width: 500px;">Notes: <span style="font-weight: 600">{{ $expense["notes"] }}</span></p>

            <div style="border-top: solid 1px black">
                <p>Category: <span style="color: {{ $expense->category['hex_color'] }}">{{ $expense->category["name"] }}</span></p>
            </div>
        </div>
    @endforeach
</body>
</html>