<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <title>Thêm Tác Giả</title>
</head>
<body>
<h1>Thêm Tác Giả</h1>
<form method="post">
    {{csrf_field()}}
    <div class="form-group">
        <input type="text" class="form-control" name="name">
    </div>
    <input type="submit" class="btn btn-primary">
</form>
<script src="/js/jquery-3.2.1.js"></script>
<script src="/js/bootstrap.js"></script>
</body>
</html>