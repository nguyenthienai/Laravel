<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">

			<div class="modal-header" style="padding:20px 35px;">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="row justify-content-center"><span class="glyphicon glyphicon-lock"></span> Login</h4>
			</div>

			<div class="modal-body" style="padding:40px 50px;">
				<form role="form" action="{{route('doLogin')}}" method="post">
					@csrf
					<fieldset>
						@includeIf('errors.errorlogin')
						<div class="form-group">
							<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="" value="{{old('email')}}">
						</div>
						<div class="form-group">
							<input class="form-control" placeholder="Password" name="password" type="password" value="">
						</div>
						<div class="checkbox">
							<label>
								<input name="remember" type="checkbox" value="Remember Me">Remember Me
							</label>
						</div>
						<button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
					</fieldset>
				</form>
			</div>

			<div class="modal-footer">
				<button type="submit" class="btn btn-danger btn-default pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>								
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function(){
		$("#myBtn").click(function(){
			$("#myModal").modal();
		});
	});
</script>