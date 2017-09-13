<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
<h1>Danh Sách Sản Phẩm</h1>
<a href="{{route("book.add")}}">Thêm sách</a>
<a href="{{route("category.list")}}">Danh sách loại sách</a>
<a href="{{route("author.list")}}">Danh sách tác giả</a>
<table class="table table-striped">
    <thead>
    <tr>
        <th>Tên</th>
        <th>Tác Giả</th>
        <th>Thể Loại</th>
        <th>Nhà Xuất Bản</th>
        <th>Ảnh</th>
    </tr>
    </thead>
    <tbody>
    @foreach($books as $book)
        <tr>
            <td>{{$book->book_name}}</td>
            <td>{{$book->author->name}}</td>
            <td>{{$book->category->category_name}}</td>
            <td>{{$book->book_publisher}}</td>
            <td>{{$book->img}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
<script src="/js/jquery-3.2.1.js"></script>
<script src="/js/bootstrap.js"></script>
</body>
</html>