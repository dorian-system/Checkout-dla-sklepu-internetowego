<div id="LoginModal" class="modal fade" role="dialog">
  <div class="modal-dialog">


    <div class="modal-content">
		<form id="loginForm">
			<input type="hidden" value="login">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Logowanie</h4>
		  </div>
		  <div class="modal-body">
		  <div id="login_alert" ></div>
			<div class="form-group">
				<input type="text" name="login" required class="form-control" placeholder="Login" />
			</div>

			<div class="form-group has-feedback">
				<input type="password" name="password" required class="form-control" placeholder="Hasło" />
				<i class="glyphicon glyphicon-eye-open form-control-feedback"></i>
			</div>
		  </div>
		  <div class="modal-footer">
			<button type="submin" class="btn btn-primary" id="loginBtn" >Zaloguj się</button>
			<button type="button" class="btn btn-default" data-dismiss="modal">Anuluj</button>
		  </div>
		 </form>
    </div>

  </div>
</div>