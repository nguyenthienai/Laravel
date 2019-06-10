@extends('layouts.backend.master')
@section('title', 'Quản Trị | Sửa Danh Mục')
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
					Sửa danh mục
				</div>
				<div class="panel-body">
					<form action="{{route('category.store', $category->id)}}" method="post">
						@method('patch')
						@csrf
						<div class="form-group">
							<label>Tên danh mục:</label>
							<input type="text" name="name" class="form-control" value="{{$category->name}}">
						</div>
						<div class="form-group">
							<label>Slug:</label>
							<input type="text" name="slug" class="form-control" value="{{$category->slug}}">
						</div>
						<div class="form-group">
							<label>Parent ID:</label>
							<input type="text" name="parentid" class="form-control" value="{{$category->parentid}}">
						</div>
						<div class="form-group">
							<button type="submit" name="submit" class="form-control btn btn-danger">Sửa</button>
						</div>
						<div class="form-group">
							<a href="{{route('category.list')}}" type="submit" class="form-control btn btn-danger">Hủy Bỏ</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->
@endsection