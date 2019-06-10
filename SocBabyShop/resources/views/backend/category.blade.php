@extends('layouts.backend.master')
@section('title', 'Quản Trị | Danh Mục Sản Phẩm')
@section('content')		
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Danh mục sản phẩm</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-xs-12 col-md-5 col-lg-5">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Thêm danh mục
				</div>
				<div class="panel-body">
					<form action="{{route('category.create')}}" method="post">
						@csrf
					<div class="form-group">
						<label>Tên danh mục:</label>
						<input type="text" name="name" class="form-control" placeholder="Tên danh mục...">
					</div>
					<div class="form-group">
						<label>Slug:</label>
						<input type="text" name="slug" class="form-control" placeholder="Slug...">
					</div>
					<div class="form-group">
						<label>Parent ID:</label>
						<input type="number" name="parentid" class="form-control" placeholder="Parent ID...">
					</div>
					<div class="form-group">
						<button type="submit" name="submit" class="form-control btn btn-danger">Thêm</button>
					</div>
				</form>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-md-7 col-lg-7">
			<div class="panel panel-primary">
				<div class="panel-heading">Danh sách danh mục</div>
				<div class="panel-body">
					<div class="bootstrap-table">
						<table class="table table-bordered">
							<thead>
								<tr class="bg-primary">
									<th>Tên danh mục</th>
									<th style="width:30%">Tùy chọn</th>
								</tr>
							</thead>
							<tbody>
								@if (count($categories))
								@foreach ($categories as $category)
								<tr>
									<td>{{$category->name}}</td>
									<td>
										<a href="{{route('category.edit', $category->id)}}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>
										<a href="{{route('category.delete', $category->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
									</td>
								</tr>
								@endforeach
								@endif
							</tbody>
						</table>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->
@endsection