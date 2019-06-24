@extends('layouts.master')
@section('title', 'Nội Dung Bài Viết')
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
				<div class="panel-heading">Nội dung bài viết</div>
				<div class="panel-body">
					<div class="bootstrap-table">
						<div class="table-responsive">
							<table class="table table-bordered my-3">						
								<tbody>
									<tr>		
										<td width="20%">
											<img width="150px" src="{{asset('images/' .$post->img)}}" class="thumbnail">
										</td>
										<td>{{$post->noidung}}</td>
									</tr>
								</tbody>
							</table>
							<a href="{{route('home')}}">Back</a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</div><!--/.row-->
</div>	<!--/.main-->

@endsection

