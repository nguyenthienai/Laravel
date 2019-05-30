<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Book</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <h2>Edit Book</h2>

    <div class="col-12">
        <form action="{{route('book.store',$book->id)}}" method="post">
            @method('patch')
            @csrf
            <label style="width: 150px">Tác giả:</label>
            
            <select name="author_id">
                @foreach ($authors as $author)
                <option value="{{$author->id}}" {{$author->id === $book->author->id ? "selected":"" }}>{{$author->name}}</option>
                 @endforeach
            </select><br><br>
           

            <label style="width: 150px">Tên Sách:</label>
            <input type="text" name="name" value="{{$book->name}}"><br><br>
            <label style="width: 150px">Mô tả:</label>
            <textarea type="text" name="description" rows="5" cols="50">{{$book->description}}</textarea><br><br>
            <label style="width: 150px">Số lượng:</label>
            <input type="number" name="quantity" value="{{$book->quantity}}"><br><br>
            <label style="width: 150px">Giá:</label>
            <input type="text" name="price" value="{{$book->price}}"><br><br>

            <button type="submit" name="btn" value="create">Update</button>
            <button type="submit"><a href="/books/books">Back</a></button>
        </form>
    </div>
</div>
</body>
</html>
