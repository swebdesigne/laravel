<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    {{ route('post', ['id' => 3, 'slug' => 'test2']) }}
    <br>
    {{ route('admin.post', ['id' => 3]) }}
</body>
</html>
