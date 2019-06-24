<!-- Modal -->
<div class="modal fade" id="modaleditpass" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content editPass-->
		<div class="modal-content">

			<div class="modal-header" style="padding:20px 35px;">
				<h4>Đổi Mật Khẩu</h4>
			</div>
			<div class="modal-body" style="padding:40px 50px;">
				<form role="form" action="{{route('user.storepass')}}" method="post">
					@csrf
					<fieldset>
						<div class="form-group">
							<label>Mật khẩu cũ</label>
							<input class="form-control" name="oldpassword" type="password" autofocus="" placeholder="Password...">
						</div>
						<div class="form-group">
							<label>Mật khẩu mới</label>
							<input class="form-control" name="newpassword" type="password" autofocus="" placeholder="Password...">
						</div>
						<div class="form-group">
							<label>Nhập lại mật khẩu</label>
							<input class="form-control" name="confirmpassword" type="password" autofocus="" placeholder="Password...">
						</div>
						<button type="submit" class="btn btn-success btn-block" name="btn" value="edit"><span class="glyphicon glyphicon-off"></span> OK</button>
					</fieldset>
				</form>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-danger btn-default pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Hủy</button>								
			</div>
		</div>
		<!--end Modal editPass-->
	</div>
</div>
<script>
	$(document).ready(function(){
		$("#editpass").click(function(){
			$("#modaleditpass").modal();
		});
	});
</script>