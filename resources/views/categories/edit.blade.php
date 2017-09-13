<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <title>Sửa thể loại</title>
</head>
<body>
<h1>Chỉnh sửa thể loại</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            Tên này bị trùng
        </ul>
    </div>
@endif
<form method="post">
    {{csrf_field()}}
    <div class="form-group">
        <input class="form-control" type="text" name="category_name" value="{{$category->category_name}}">
    </div>
    <input type="submit" class="btn btn-primary" value="Sửa">
</form>
<script src="/js/jquery-3.2.1.js"></script>
<script src="/js/bootstrap.js"></script>
</body>
</html>