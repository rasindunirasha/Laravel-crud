<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; display: flex; flex-direction: column; align-items: center; padding: 20px;">

    <h1 style="color: #333;">Product List</h1>

    <div style="margin-bottom: 15px; color: green; font-weight: bold;">
        @if(session()->has('success'))
        <div style="background: #d4edda; padding: 10px; border-radius: 5px; color: #155724; border: 1px solid #c3e6cb;">
            {{ session('success') }}
        </div>
        @endif
    </div>

    <div style="width: 80%; background: white; padding: 20px; border-radius: 8px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);">
        <table border="1" style="width: 100%; border-collapse: collapse; text-align: center;">
            <tr style="background: #007bff; color: white;">
                <th style="padding: 10px; border: 1px solid #ddd;">ID</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Name</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Qty</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Price</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Description</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Edit</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Delete</th>
            </tr>

            @foreach ($products as $product)
            <tr style="background: #f9f9f9;">
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $product->id }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $product->name }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $product->qty }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $product->price }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $product->description }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">
                    <a href="{{ route('products.edit', $product->id) }}" 
                        style="background: #ffc107; color: black; padding: 5px 10px; border-radius: 5px; text-decoration: none; display: inline-block;">Edit</a>
                </td>
                <td style="padding: 10px; border: 1px solid #ddd;">
                    <form method="POST" action="{{ route('products.destroy', $product->id) }}" onsubmit="return confirm('Are you sure?');" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                            style="background: #dc3545; color: white; border: none; padding: 5px 10px; border-radius: 5px; cursor: pointer;"
                            onmouseover="this.style.backgroundColor='#c82333';" onmouseout="this.style.backgroundColor='#dc3545';">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
