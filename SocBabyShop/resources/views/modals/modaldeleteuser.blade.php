<!-- Modal delete -->
<div class="modal fade" id="modaldelete" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content delete-->
		<div class="modal-content">

			<div class="modal-header" style="padding:20px 35px;">
				<h4>Vui lòng xác nhận mật khẩu của bạn</h4>
			</div>
			<div class="modal-body" style="padding:40px 50px;">
				<form role="form" action="{{route('user.check')}}" method="post">
					@csrf
					<fieldset>
						<div class="form-group">
							<label>Password</label>
							<input required class="form-control" name="password" type="password" autofocus="" placeholder="Password...">
						</div>
						<div class="form-group">
							<label>Nhập lại mật khẩu</label>
							<input class="form-control" name="confirmpassword" type="password" autofocus="" placeholder="Password...">
						</div>
						<button type="submit" onclick="return confirm('Bạn có chắc chắn muốn hủy bỏ quyền quản trị ?')" class="btn btn-success btn-block" name="btn" value="delete"><span class="glyphicon glyphicon-off"></span> OK</button>
					</fieldset>
				</form>
			</div>

			<div class="modal-footer">
				<button type="submit" class="btn btn-danger btn-default pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Hủy</button>								
			</div>
		</div>		
	</div>
</div>
<!--end Moddal delete-->
<script>
	$(document).ready(function(){
		$("#delete").click(function(){
			$("#modaldelete").modal();
		});
	});
</script>