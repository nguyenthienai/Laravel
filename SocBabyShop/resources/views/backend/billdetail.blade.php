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
				<div class="panel-heading">Chi tiết hóa đơn</div>
				<div class="panel-body">
					<div class="bootstrap-table">
						<div class="table-responsive">
							<div>@includeIf('errors.error')</div>
							<div>@includeIf('success.success')</div>
							<div class="text-success">Khách hàng: {{$bill->customer->name}}</div>
							<div class="text-success">Mã Hóa Đơn: {{$bill->id}}</div>
							<table class="table table-bordered my-3">				
								<thead>
									<tr class="bg-primary">
										<th>ID</th>
										<th>Tên Sản Phẩm</th>
										<th>Số Lượng</th>
										<th>Đơn Giá</th>
										<th>Thành Tiền</th>
										<th>Ngày Đặt Hàng</th>
									</tr>
								</thead>
								<tbody>
									@foreach ($billdetails as $key=>$billdetail)
									<tr>
										<td>{{$bill->id}}</td>
										<td>{{$billdetail->product->name}}</td>
										<td>{{$billdetail->quantity}}</td>
										<td>{{number_format($billdetail->unitprice)}} đ</td>
										<td>{{number_format($billdetail->unitprice * $billdetail->quantity)}} đ</td>
										<td>{{$bill->created_at}}</td>
									</tr>
									@endforeach
								</tbody>
							</table>
							<div class="text-warning">Ghi chú của khách hàng: {{$bill->note}}</div>
							<div><h3>Tổng thanh toán: {{number_format($bill->total)}} đ</h3></div>
							<a href="{{route('bill.list')}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Trở lại</a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->

@endsection

