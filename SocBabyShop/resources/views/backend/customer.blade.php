@extends('layouts.backend.master')
@section('title', 'Quản Trị | Khách Hàng')
@section('content')	

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Khách Hàng</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">

			<div class="panel panel-primary">
				<div class="panel-heading">Danh sách khách hàng</div>
				<div class="panel-body">
					<div class="bootstrap-table">
						<div class="table-responsive">
							<a href="{{route('customer.create')}}" class="btn btn-primary my-3">Thêm khách hàng</a>
							<div class="row text-center my-3">{{$customers -> links()}}</div>
							<table class="table table-bordered my-3">				
								<thead>
									<tr class="bg-primary">
										<th>ID</th>
										<th width="20%">Tên Khách Hàng</th>
										<th>Email</th>
										<th>Số Điện Thoại</th>
										<th width="20%">Địa Chỉ</th>
										<th>Tùy chọn</th>
									</tr>
								</thead>
								<tbody>
									@if (count($customers))
									@foreach ($customers as $customer)
									<tr>
										<td>{{$customer->id}}</td>
										<td>{{$customer->name}}</td>
										<td>{{$customer->email}}</td>
										<td>{{$customer->phone}}</td>
										<td>{{$customer->address}}</td>
										<td>
											<a href="{{route('customer.edit',$customer->id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
											<a href="{{route('customer.delete', $customer->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa sản phẩm này ?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
										</td>
									</tr>
									@endforeach
									@endif
								</tbody>
							</table>
							<div class="row text-center">{{$customers -> links()}}</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->

@endsection

