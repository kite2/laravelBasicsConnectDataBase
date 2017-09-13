<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <title>Xóa loại sách</title>
</head>
<body>
<h1>Bạn có chắc muốn xóa loại sách này</h1>
<form method="post">
    {{csrf_field()}}
    <div class="form-group">
        <input type="text" name="category_name" value="{{$category->category_name}}" disabled/>
    </div>
    <input type="submit" class="btn btn-primary" value="Xóa">
</form>
<script src="/js/jquery-3.2.1.js"></script>
<script src="/js/bootstrap.js"></script>
</body>
</html>