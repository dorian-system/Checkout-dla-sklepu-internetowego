<div class="summary">
<div class="list-group">
	<div class="list-group-item">
		<div class="row">
			<div class="col-xs-9">
				<img class="img-responsive" src="<?=$config->APP_PATH;?>/web/images/product.jpg" >
				<h4 class="list-group-item-heading">Testowy produkt</h4>
				<p class="list-group-item-text">Iilość 1</p>
			</div>
			<div class="col-xs-3">
				<p class="list-group-item-text">115,00 zł</p>
			</div>
		</div>
	</div>
</div>
<hr />
<div class="row">
	<div class="col-xs-9">
		<p>Summa częściowa</p>
	</div>
	<div class="col-xs-3">
		<p class="items-price" data-items-price="115.00" >115,00 zł</p>
	</div>
</div>
<div class="row">
	<div class="col-xs-9">
		<p>Koszt dostawy</p>
	</div>
	<div class="col-xs-3">
		<p class="summary-delivery-price" >0,00 zł</p>
	</div>
</div>
<div class="row">
	<div class="col-xs-8">
		<h4>Łacznie</h4>
	</div>
	<div class="col-xs-4">
		<h4 class="summary-price" >115,00 zł</h4>
		<input id="amount" type="hidden" name="amount" value="115.00">
	</div>
</div>
<hr />


<div class="checkbox">
  <label><input name="newsletter" type="checkbox" value="1" >Zapisz się, aby otrzymywać newsletter</label>
</div>

<div class="checkbox">
  <label><input name="regulamin" type="checkbox" value="1" required>Zapoznałam/em się z Regulaminem zakupów</label>
</div>

<button type="submit" class="btn btn-danger btn-block">POTWIERDŻ ZAKUP</button> 
</div>