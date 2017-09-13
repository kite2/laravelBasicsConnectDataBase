<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <title>Danh sách các loại sách</title>
</head>
<body>
<h1>Danh sách loại sách</h1>
<a href="{{route("category.add")}}">Thêm Thể Loại </a>
<a href="{{route("book.list")}}">Về trang chủ </a>
<table class="table table-striped">
    <thead>
    <tr>
        <th>Số Thứ Tự</th>
        <th>Tên Thể Loại</th>
        <th>Chỉnh Sửa</th>
        <th>Xóa</th>
    </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
        <tr>
            <td>{{$category->id}}</td>
            <td>{{$category->category_name}}</td>
            <td><a href="{{route("category.edit", ["id"=>$category->id])}}">Chỉnh sửa</a></td>
            <td><a href="{{route("category.delete", ["id"=>$category->id])}}">Xóa</a> </td>
        </tr>
    @endforeach

    </tbody>
</table>
<script src="/js/jquery-3.2.1.js"></script>
<script src="/js/bootstrap.js"></script>
</body>
</html>