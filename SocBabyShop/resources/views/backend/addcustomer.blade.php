@extends('layouts.backend.master')
@section('title', 'Quản Trị | Thêm mới khách hàng')
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
				<div class="panel-heading">Thêm khách hàng</div>
				<div class="panel-body">
					<form action="{{route('customer.docreate')}}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="row" style="margin-bottom:40px">
							<div class="col-xs-8">
								<div class="form-group" >
									<label>Tên Khách Hàng</label>
									<input required type="text" name="name" class="form-control">
								</div>
								<div class="form-group" >
									<label>Email</label>
									<input required type="text" name="email" class="form-control">
								</div>
								<div class="form-group" >
									<label>Số Điện Thoại</label>
									<input required type="text" name="phone" class="form-control">
								</div>
								<div class="form-group" >
									<label>Địa Chỉ</label>
									<input required type="text" name="address" class="form-control">
								</div>
								<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
								<a href="{{route('customer.list')}}" class="btn btn-danger">Hủy bỏ</a>
							</div>
						</div>
					</form>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div><!--/.row-->
</div>	<!--/.main-->
@endsection
