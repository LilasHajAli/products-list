<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>

    <body>


<form action="{{ url('/products') }}" method="GET">
    <label>Search Product</label>
    <input type="text" name="search" placeholder="Enter product name">

    <button type="submit">Search</button>
</form>
@if (request('search'))
    <a href="{{ url('/products') }}">Back to Products</a>
@endif


        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Category</th>
                    <th scope="col">Created At</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->category }}</td>
                        <td>{{ $product->created_at }}</td>
                    </tr>
                @endforeach

            </tbody>
        </table>
@if (!request('search'))
    <a href="{{ url('/products/create') }}">Create Product</a>
@endif
   </body>
</html>

