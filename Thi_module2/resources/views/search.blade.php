@extends('layouts.master')
@section('title','List Book')
@section('content')
<body>
    <a class="btn btn-success" href="{{route('book.create')}}">Thêm Mới</a><br><br>
    <div class="container">
        <div class="col-12">
            <div class="row">
                <div class="row justify-content-center">{{$books -> links()}}</div>
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
                            <td><button><a href="{{route('book.detail',$book->id)}}">Detail</a></button></td>
                            <form action="{{route('book.delete',$book->id)}}" method="post">
                                @method('delete')
                                @csrf
                                <td><button onclick="return confirm('Are you sure delete this record ?')">Delete</button></td>
                            </form>       
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
                <div class="row justify-content-center">{{$books -> links()}}</div>  
            </div>
            <a href="{{route('book.list')}}">Back</a>
        </div>
    </div>
</body>
@endsection
