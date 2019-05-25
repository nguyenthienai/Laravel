<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách khách hàng</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
<a href="/create">Create New Author</a><br><br>
<div class="container">
    <div class="col-12">
        <div class="row">
            <h1>Danh Sách Authors</h1><br><br>

            <table class="table table-striped">

                <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên Tác Giả</th>
                    <th scope="col">Email</th>
                    <th scope="col">Quốc Tịch</th>
                </tr>
                </thead>
                <tbody>
                @if(count($authors) === 0)
                    <tr>
                        <td colspan="4">Không có dữ liệu</td>
                    </tr>
                @else
                    @foreach($authors as $key => $authors)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $authors->name }}</td>
                            <td>{{ $authors->email }}</td>
                            <td>{{ $authors->country }}</td>

                            <td><button><a href="{{route('author.edit',$authors->id)}}">Edit</a></button></td>
                            <form action="{{route('author.delete',$authors->id)}}" method="post">
                                @method('delete')
                                @csrf
                                <td><button onclick="return confirm('Are you sure delete this record ?')">Delete</button></td>
                            </form>


                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
