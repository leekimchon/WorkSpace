<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/index" method="POST">
        @csrf
        Product Description
        <p><input type="text" name="Product_Description" id=""></p>
        List Price
        <p><input type="number" name="List_Price" id=""></p>
        Discount Percent
        <p><input type="number" name="Discount_Percent" id=""></p>
        <p><button type="submit">Calculate Discount</button></p>
    </form>
</body>
</html>