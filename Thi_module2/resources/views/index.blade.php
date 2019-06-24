@extends('layouts.master')
@section('title','List Book')
@section('content')
<body>
    <div class="container">

        <div class="col-12">
            <div class="row">
                <h1>Danh Sách Books</h1><br><br>
                <div class="col-12 row">
                    <div class="col-6 ">
                       <div class="float-right">
                        <form action="{{route('book.findName')}}" method="post">
                            @csrf
                            <input type="text" name="findNameBook" placeholder="Tên sách">
                            <button>Tìm</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6"><a class="btn btn-success" href="{{route('book.create')}}">Thêm mới</a></div>
            </div> 
            <div>@includeIf('note.error')</div>
            <div>@includeIf('note.success')</div>
            
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên Sách</th>
                        <th scope="col">Tác Giả</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($books) === 0)
                    <tr>
                        <td colspan="4">Không có dữ liệu</td>
                    </tr>
                    @else
                    @foreach($books as $key => $book)
                    <tr>
                        <th scope="row">{{ ++$key }}</th>
                        <td>{{ $book->name }}</td>
                        <td>{{ $book->author}}</td>
                        <td><a class="btn btn-success" href="{{route('book.detail',$book->id)}}">Chi Tiết</a></td>
                        <form action="{{route('book.delete',$book->id)}}" method="post">
                            @method('delete')
                            @csrf
                            <td><button class="btn btn-danger" onclick="return confirm('Are you sure delete this record ?')">Xóa</button></td>
                        </form>    
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
            <div class="row justify-content-center">{{$books -> links()}}</div>
        </div>
    </div>
</div>
</body>
@endsection
