<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
</head>
<body style="display: flex; justify-content: center">
    @foreach ($categories as $category)
        <div style="border: 1px solid black; margin: 7px 10px; width: fit-content; padding: 3px 6px">
            <h2 style="text-align: center">Category: <span style="color: {{ $category['hex_color'] }}">{{ $category["name"] }}</span></h2>
            <h3 style="font-size: 1.7em">Expenses:</h3>
            @foreach($category->expenses as $expense)
                <div style="width: 500px; border-top: solid 1px black">
                    <p>Date: <span style="font-weight: 600">{{ $expense["date"] }}</span></p>
                    <p>Amount: <span style="font-weight: 600">{{ $expense["amount"] }}$</span></p>
                    <p>Notes: <span style="font-weight: 600">{{ $expense["notes"] }}</span></p>
                </div>
            @endforeach
        </div>
    @endforeach
</body>
</html>