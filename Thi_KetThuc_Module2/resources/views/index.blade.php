@extends('layouts.master')
@section('title', 'Quản Trị | Bài Viết')
@section('content')	

<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Bài Viết</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">Danh sách bài viết</div>
				<div class="panel-body">
					<div class="bootstrap-table">
						<div>@includeIf('success')</div>
						<div>@includeIf('error')</div>
						<div class="table-responsive">
							<a href="{{route('post.create')}}" class="btn btn-primary my-3">Thêm bài viêt</a>
							<div class="row text-center my-3">{{$posts -> links()}}</div>
							<table class="table table-bordered my-3">
								<th>Ảnh bài viết</th>
								<th>Tiêu đề</th>
								<th>Tùy Chọn</th>						
								<tbody>
									@if (count($posts))
									@foreach ($posts as $post)
									<tr>		
										<td width="20%">
											<img width="150px" src="{{asset('images/' .$post->img)}}" class="thumbnail">
										</td>
										<td width="55%">{{$post->tomtat}}</td>
										<td>
											<a href="{{route('post.detail', $post->id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Xem bài viết</a>
											<a href="{{route('post.edit', $post->id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
											<a href="{{route('post.delete',$post->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này ?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
										</td>
									</tr>
									@endforeach
									@endif
								</tbody>
							</table>
							<div class="row text-center">{{$posts -> links()}}</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->

@endsection

