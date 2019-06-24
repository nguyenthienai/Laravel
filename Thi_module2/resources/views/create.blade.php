@extends('layouts.master')
@section('title','Create Book')
@section('content')
<body>
    <div class="container">
        <h2>Create New Book</h2>
        <div>@includeIf('note.error')</div>
        <div>@includeIf('note.success')</div>
        <div class="col-12">
            <form action="{{route('book.docreate')}}" method="post">
                @csrf
                <label style="width: 150px">Tên Sách:</label>
                <input required type="text" name="name" placeholder="Tên Sách"><br><br>
                <label style="width: 150px">Tác Giả:</label>
                <input required type="text" name="author" placeholder="Tác Giả"><br><br>
                <label style="width: 150px">Mô tả:</label>
                <textarea required type="text" name="description" placeholder="Mô tả" rows="5" cols="50"></textarea><br><br>
                <label style="width: 150px">Số lượng:</label>
                <input required type="number" name="quantity" placeholder="Số lượng"><br><br>
                <label style="width: 150px">Năm Xuất Bản:</label>
                <input required type="date" name="xb" placeholder="Năm Xuất Bản"><br><br>

                <button type="submit" name="btn" value="create">Thêm</button>
                <button type="submit"><a href="{{route('book.list')}}">Trở lại</a></button>
            </form>
        </div>
    </div>
</body>
@endsection
