<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="translate/" method="POST">
        @csrf
        @method ('PUT')
        <p><input type="text" name="key" id=""></p>
        <button type="submit">Dịch</button>
    </form>
</body>
</html>