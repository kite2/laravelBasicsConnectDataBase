<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <title>Add Books</title>
</head>
<body>
<form method="post">
    {{csrf_field()}}
    <div class="form-group">
        <label for="categories">Thể loại:</label>
        <select class="form-control" id="categories" name="category">
            @foreach($books as $book)
                <option value={{$book->category}}>{{$book->category->category_name}}</option>
            @endforeach
        </select>
    </div>
</form>
<script src="/js/jquery-3.2.1.js"></script>
<script src="/js/bootstrap.js"></script>
</body>
</html>