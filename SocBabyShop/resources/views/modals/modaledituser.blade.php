<!-- Modal -->
<div class="modal fade" id="modaledit" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content edit-->
		<div class="modal-content">

			<div class="modal-header" style="padding:20px 35px;">
				<h4>Vui lòng xác nhận mật khẩu của bạn</h4>
			</div>
			<div class="modal-body" style="padding:40px 50px;">
				<form role="form" action="{{route('user.check')}}" method="post">
					@csrf
					<fieldset>
						<div class="form-group">
							<label>Mật Khẩu</label>
							<input class="form-control" name="password" type="password" autofocus="" placeholder="Password...">
						</div>
						<div class="form-group">
							<label>Nhập Lại Mật Khẩu</label>
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
		<!--end Modal edit-->
	</div>
</div>
<script>
	$(document).ready(function(){
		$("#edit").click(function(){
			$("#modaledit").modal();
		});
	});
</script>