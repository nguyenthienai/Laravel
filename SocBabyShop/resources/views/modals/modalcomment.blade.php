<!-- Modal -->
<div class="modal fade" id="myModal1" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<form action="{{route('comment.post', $product->id)}}" method="post">
					@csrf
					<div class="form-group">
						<label for="email">Email:</label>
						<input required type="email" class="form-control" id="email" name="email">
					</div>
					<div class="form-group">
						<label for="name">Tên:</label>
						<input required type="text" class="form-control" id="name" name="name">
					</div>
					<div class="form-group">
						<label for="cm">Bình luận:</label>
						<textarea required rows="10" id="cm" class="form-control" name="content" rows="10"></textarea>
					</div>
					<div class="form-group text-right">
						<button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Gửi</button>
					</div>
				</form>
			</div>
		</div>     
	</div>
</div> 
<script>
	$(document).ready(function(){
		$("#myBtn1").click(function(){
			$("#myModal1").modal();
		});
	});
</script>