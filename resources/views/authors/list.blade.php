<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <title>Danh sách tác giả</title>
</head>
<body>
<h1>Danh sách tác giả</h1>
<a href="{{route("author.add")}}">Thêm tác giả</a>
<a href="{{route("book.list")}}">Về trang chủ</a>
@if(session('thongbao'))
    <div class="alert alert-danger">
        <ul>
            <li>{{session('thongbao') }}</li>
            @endif
        </ul>
    </div>
<table class="table table-striped">
    <thead>
    <tr>
        <th>Số Thứ Tự</th>
        <th>Tên Tác Giả</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>
    </thead>
    <tbody>
    @foreach($authors as $author)
    <tr>
        <td>{{$author->id}}</td>
        <td>{{$author->name}}</td>
        <td><a href="{{route("author.edit", ["id" => $author->id])}}">Sửa</a> </td>
        <td><a href="{{route("author.delete", ["id" =>$author->id])}}">Xóa</a> </td>
    </tr>
    @endforeach
    </tbody>
</table>
<script src="/js/jquery-3.2.1.js"></script>
<script src="/js/bootstrap.js"></script>
</body>
</html>