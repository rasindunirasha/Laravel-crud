<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Document</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f4f4f4; display: flex; justify-content: center; align-items: center; height: 100vh;">

    <div style="background: white; padding: 20px; border-radius: 8px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); width: 400px;">
        <h1 style="text-align: center; color: #333;">Create a Document</h1>
        
        <div>
            @if($errors->any())
            <ul style="background: #ffdddd; padding: 10px; border-radius: 5px; list-style-type: none; color: red; font-size: 14px;">
                @foreach($errors->all() as $error)
                   <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif
        </div>

        <form method="POST" action="{{ route('products.store') }}" style="display: flex; flex-direction: column;">
            @csrf
            @method('post')

            <label for="name" style="font-weight: bold; margin-top: 10px;">Name</label>
            <input type="text" name="name" placeholder="Name" 
                style="width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">

            <label for="qty" style="font-weight: bold; margin-top: 10px;">Qty</label>
            <input type="text" name="qty" placeholder="Qty" 
                style="width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">

            <label for="price" style="font-weight: bold; margin-top: 10px;">Price</label>
            <input type="text" name="price" placeholder="Price" 
                style="width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">

            <label for="description" style="font-weight: bold; margin-top: 10px;">Description</label>
            <input type="text" name="description" placeholder="Description" 
                style="width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">

            <input type="submit" value="Save a New Product" 
                style="background-color: #007bff; color: white; border: none; padding: 10px; border-radius: 5px; font-size: 16px; cursor: pointer; margin-top: 15px; transition: background 0.3s ease;"
                onmouseover="this.style.backgroundColor='#0056b3';" onmouseout="this.style.backgroundColor='#007bff';">
        </form>
    </div>
</body>
</html>
