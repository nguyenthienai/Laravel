@extends('layouts.master')
@section('title','Detail Book')
@section('content')
<body>
    <div class="container">
        <div class="col-12">
            <div class="row">
                <h1>Chi Tiết Sách</h1><br><br>
                <div class="col-12 row">
                    <div class="col-6 ">
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Tên Sách</th>
                        <th scope="col">Tác Giả</th>
                        <th scope="col">Mô Tả</th>
                        <th scope="col">Năm Xuất Bản</th>
                        <th scope="col">Số Lượng</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $book->name }}</td>
                        <td>{{ $book->author}}</td>
                        <td>{{ $book->description}}</td>
                        <td>{{ $book->xb}}</td>
                        <td>{{ $book->quantity}}</td>
                    </tr>
                </tbody>
            </table>
            <button><a href="{{route('book.list')}}">Back</a></button>
        </div>
    </div>
</div>
</body>
@endsection
