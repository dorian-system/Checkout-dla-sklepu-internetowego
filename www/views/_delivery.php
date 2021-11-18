
<div class="form-group delivery radio-icon">
	<div class="radio">
		<label><input type="radio" name="deliveryMethod" value="1" data-method="transfer" data-price="10.99" required><img src="<?=$config->APP_PATH;?>/web/images/inpostp.png" />Paczkomaty 24/7</label>
		<span class="pull-right" >10,99 zł</span>
	</div>
	<div class="radio">
		<label><input type="radio" name="deliveryMethod" value="2" data-method="transfer" data-price="18.00" required><img src="<?=$config->APP_PATH;?>/web/images/dpd.png" />Kurier DPD</label>
		<span class="pull-right" >18,00 zł</span>
	</div>
	<div class="radio">
		<label><input type="radio" name="deliveryMethod" value="3" data-method="cash" data-price="22.99" required><img src="<?=$config->APP_PATH;?>/web/images/dpd.png" />Kurier DPD pobranie</label>
		<span class="pull-right" >22,99 zł</span>
	</div>
</div>