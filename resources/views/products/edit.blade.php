<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products - Edit</title>
    <style>
        form {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column
        }

        input {
            font-size: 3rem;
            margin: 1rem;
            padding: 1rem;
        }
    </style>
</head>

<body>
    <h1>Products - Create</h1>


    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>

    @endif

    <form action='{{ route('products.update', ['product' => $product]) }}' method="POST">
        @csrf
        @method('put')
        <input type="text" name="name" placeholder="Name" value="{{ $product->name }}">
        <input type="text" name="qty" placeholder="qty" value="{{ $product->qty }}">
        <input type="text" name="price" placeholder="Price" value="{{ $product->price }}">
        <input type="text" name="description" placeholder="Description" value="{{ $product->description }}">
        <input type="submit" value="Update">
    </form>
</body>

</html>
