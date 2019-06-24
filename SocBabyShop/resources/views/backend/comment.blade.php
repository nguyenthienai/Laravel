@extends('layouts.backend.master')
@section('title', 'Quản Trị | Bình Luận')
@section('content')	

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Bình Luận Của Khách Hàng</h1>
		</div>
	</div><!--/.row-->
	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">Danh sách bình luận</div>
				<div class="panel-body">
					<div class="bootstrap-table">
						<div class="table-responsive">
							<div class="row text-center my-3">{{$comments -> links()}}</div>
							<table class="table table-bordered my-3">				
								<thead>
									<tr class="bg-primary">
										<th>ID</th>
										<th>Tên Khách Hàng</th>
										<th>Email</th>
										<th>Nội Dung</th>
										<th>Sản Phẩm</th>
										<th>Tùy Chọn</th>
									</tr>
								</thead>
								<tbody>
									@if (count($comments))
									@foreach ($comments as $comment)
									<tr>
										<td>{{$comment->id}}</td>
										<td>{{$comment->name}}</td>
										<td>{{$comment->email}}</td>
										<td>{{$comment->content}}</td>
										<td>{{$comment->product->name}}</td>
										<td>
											<a href="{{route('comment.delete', $comment->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này ?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
										</td>
									</tr>
									@endforeach
									@endif
								</tbody>
							</table>
							<div class="row text-center">{{$comments -> links()}}</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->

@endsection

