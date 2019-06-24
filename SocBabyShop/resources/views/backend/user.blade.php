@extends('layouts.backend.master')
@section('title', 'Quản Trị | Danh Mục Quản Trị Viên')
@section('content')	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<style type="text/css">
	.modal-header, h4, .close {
		background-color: #5cb85c;
		color:white !important;
		text-align: center;
		font-size: 30px;
	}
	.modal-footer {
		background-color: #f9f9f9;
	}
</style>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Danh Mục Quản Trị Viên</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-md-9">
			<div class="panel panel-primary">
				<div class="panel-heading">Danh Sách Quản Trị Viên</div>
				<div class="panel-body">
					<div class="bootstrap-table">
						<a type="button" class="btn btn-primary" id="create">Thêm mới Quản trị viên</a>
						@include('modals.modalcreateuser')
						<table class="table table-bordered">
							<thead>
								<tr class="bg-primary">
									<th>Tên Quản Trị Viên</th>
									<th>Email</th>
								</tr>
							</thead>
							<tbody>
								@if (count($users))
								@foreach ($users as $user)
								<tr>
									<td>{{$user->name}}</td>
									<td>{{$user->email}}</td>
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