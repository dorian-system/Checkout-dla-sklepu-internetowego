
<div class="form-group payment radio-icon">
	<div class="radio">
		<label><input type="radio" name="paymentMethod"  data-method="transfer" value="1" required><img src="<?=$config->APP_PATH;?>/web/images/payu.png" />PayU</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="paymentMethod" data-method="cash" value="2" required><img src="<?=$config->APP_PATH;?>/web/images/cash.png" />Płatność przy odbiorze</label>
	</div>
	<div class="radio">
		<label><input type="radio" name="paymentMethod" data-method="transfer" value="3" required><img src="<?=$config->APP_PATH;?>/web/images/bank.png" />Przelew bankowy - zwykły</label>
	</div>
</div>