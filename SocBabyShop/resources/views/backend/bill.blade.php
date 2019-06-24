@extends('layouts.backend.master')
@section('title', 'Quản Trị | Hóa Đơn')
@section('content')	

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Hóa Đơn</h1>
		</div>
	</div><!--/.row-->
	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">

			<div class="panel panel-primary">
				<div class="panel-heading">Danh sách hóa đơn</div>
				<div class="panel-body">
					<div class="bootstrap-table">
						<div style="margin-bottom: 10px"><a href="{{route('customer.create')}}" class="btn btn-primary my-3">Thêm hóa đơn</a></div>
						<div class="table-responsive">
							
							<div class="row text-center my-3">{{$bills -> links()}}</div>
							<div>@includeIf('errors.error')</div>
							<div>@includeIf('success.success')</div>
							<table class="table table-bordered my-3">				
								<thead>
									<tr class="bg-primary">
										<th>ID</th>
										<th>Tên Khách Hàng</th>
										<th>Ngày Đặt Hàng</th>
										<th>Tổng Tiền</th>
										<th>Ghi Chú</th>
										<th>Tùy chọn</th>
									</tr>
								</thead>
								<tbody>
									@if (count($bills))
									@foreach ($bills as $bill)
									<tr>
										<td>{{$bill->id}}</td>
										<td>{{$bill->customer->name}}</td>
										<td>{{$bill->dateorder}}</td>
										<td>{{number_format($bill->total)}} đ</td>
										<td>{{$bill->note}}</td>
										<td>
											<a href="{{route('bill.detail',$bill->id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Xem chi tiết</a>
											<a href="#" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
											<a href="{{route('bill.delete', $bill->id)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa hóa đơn này ?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Xóa</a>
										</td>
									</tr>
									@endforeach
									@endif
								</tbody>
							</table>
							<div class="row text-center">{{$bills -> links()}}</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->

@endsection

