<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <title>Xóa Tác Giả</title>
</head>
<body>
<div class="container">
    <h1>Bạn có chắc muốn xóa Tác Giả này</h1>
    <form method="post" action="{{ route('author.delete',$author->id) }}">
        {{csrf_field()}}
        <div class="form-group">
            <input type="text" name="name" value="{{$author->name}}" disabled class="form-control">
        </div>
        <input type="submit" class="btn btn-primary" value="Xóa">

    </form>
</div>
<script src="/js/jquery-3.2.1.js"></script>
<script src="/js/bootstrap.js"></script>
</body>
</html>