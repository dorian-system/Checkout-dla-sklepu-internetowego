
<div class="form-group text-center">
	<button type="button" class="btn btn-danger btn-block"  data-toggle="modal" data-target="#LoginModal" >Logowanie</button>
	<small class="form-text text-muted">Masz już konto? Kliknij żeby się zalogować.</small>
</div>

<div class="checkbox">
  <label><input name="new_buyer" id="new_buyer" type="checkbox" value="1">Stwórz nowe konto</label>
</div>

<div class="new-buyer-form" >
	<div class="form-group">
		<input type="text" name="login" required class="form-control" placeholder="Login" />
	</div>

	<div class="form-group has-feedback">
	<input type="password" id="password" name="password" required class="form-control" placeholder="Hasło" />
	<i class="glyphicon glyphicon-eye-open form-control-feedback"></i>
	</div>

	<div class="form-group has-feedback">
		<input type="password" name="password_confirm" required class="form-control" placeholder="Potwierż hasło" />
		<i class="glyphicon glyphicon-eye-open form-control-feedback"></i>
	</div>

	<div class="form-group">
		<input type="text" name="fname" required class="form-control" placeholder="Imię *" />
	</div>

	<div class="form-group">
		<input type="text" name="lname" required class="form-control" placeholder="Nazwisko *" />
	</div>

	<div class="form-group">
		<select name="buyer_country" required class="selectpicker" data-width="100%" title="Kraj" >
			<option value="Polska" selected >Polska</option>
			<option value="Zimbabwe" >Zimbabwe</option>
		</select>
		
	</div>

	<div class="form-group">
		<input type="text" name="buyer_street" required class="form-control" placeholder="Adres *" />
	</div>

	<div class="row">
		<div class="col-md-5 col-xs-12">
			<div class="form-group">
				<input type="text" name="buyer_postal_code" required class="form-control" placeholder="Kod pocztowy *" />
			</div>
		</div>
		<div class="col-md-7 col-xs-12">
			<div class="form-group">
				<input type="text" name="buyer_city" required class="form-control" placeholder="Miasto *" />
			</div>
		</div>
	</div>

	<div class="form-group">
		<input type="text" name="buyer_phone" required class="form-control" placeholder="Telefon *" />
	</div>
</div>

<div class="checkbox">
  <label><input id="other_delivery_address" type="checkbox" value="1">Dostawa pod inny adres</label>
</div>

<div class="delivery-address-form">
	<div class="form-group">
		<select name="delivery_country" required class="selectpicker" data-width="100%" title="Kraj" >
			<option value="Polska" selected >Polska</option>
			<option value="Zimbabwe" >Zimbabwe</option>
		</select>
		
	</div>

	<div class="form-group">
		<input type="text" name="delivery_street" required class="form-control" placeholder="Adres *" />
	</div>

	<div class="row">
		<div class="col-md-5 col-xs-12">
			<div class="form-group">
				<input type="text" name="delivery_postal_code" required class="form-control" placeholder="Kod pocztowy *" />
			</div>
		</div>
		<div class="col-md-7 col-xs-12">
			<div class="form-group">
				<input type="text" name="delivery_city" required class="form-control" placeholder="Miasto *" />
			</div>
		</div>
	</div>

	<div class="form-group">
		<input type="text" name="delivery_phone" required class="form-control" placeholder="Telefon *" />
	</div>
</div>
