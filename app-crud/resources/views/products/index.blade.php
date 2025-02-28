<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product</h1>
    <div>
        @if(session()->has('success'))
        <div>
            {{ session('success') }}
        </div>
        @endif
    </div>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($products as $product )
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name}}</td>
                <td>{{ $product->qty }}</td>
                <td>{{ $product->price}}</td>
                <td>{{ $product->description}}</td>
                <td>
                <a href="{{ route('products.edit', $product->id) }}">Edit</a>
                </td>

                <td>
                <form method="POST" action="{{ route('products.destroy', $product->id) }}" onsubmit="return confirm('Are you sure?');">
                 @csrf
                 @method('DELETE')
                <button type="submit">Delete</button>
                </form>




                </td>

            </tr>
            
            @endforeach
        </table>
    </div>
</body>
</html>