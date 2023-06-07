<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products - Create</title>
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

    <form action='{{ route('products.store') }}' method="POST">
        @csrf
        @method('POST')
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="qty" placeholder="qty">
        <input type="text" name="price" placeholder="Price">
        <input type="text" name="description" placeholder="Description">
        <input type="submit" value="Submit">
    </form>
</body>

</html>
