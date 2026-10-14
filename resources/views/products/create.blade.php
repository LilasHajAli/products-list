
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>
<body>

    <form action="{{ url('/products') }}" method="post">
        @csrf

        <label>name</label>
        <input type="text" name="name">

        <br><br>

        <label>price</label>
        <input type="number" name="price">

        <br><br>

        <label>category</label>
        <select name="category">
            <option value="">Select Category</option>
            <option value="Electronics">Electronics</option>
            <option value="Clothes">Clothes</option>
            <option value="Accessories">Accessories</option>
        </select>

        <br><br>

        <label>description</label>
        <textarea name="description"></textarea>

        <br><br>

        <button type="submit">Submit</button>
    </form>

</body>
</html>

