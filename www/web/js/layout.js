/**
* Checkout dla sklepu internetowego
*/

$(function() {
	function layout() {
		var self = this;
		
		this.validateNewBuyer = function(){
			 $('#checkout').validate({
				lang: 'pl', 
				rules: {
					login: {
						required: true
					},
					password: {
						required: true,
						minlength: 6
					},
					password_confirm : {
						minlength : 6,
						equalTo : "#password"
					},
					
				},
				submitHandler: function(form) {
					
					self.setOder(form);
				}
			});
		};
		
		this.validateLogin = function(){
			 $('#loginForm').validate({
				lang: 'pl', 
				rules: {
					login: {
						required: true
					},
					password: {
						required: true,
						minlength: 6
					}
					
				},
				submitHandler: function(form) {
					
					self.login(form);
				}
			});
		};
		
		this.login = function(form){
		
			$.ajax({
					type: "POST",
					url: config.APP_PATH + "/controllers/LoginDynamicController.php",
					data:  $(form).serialize(),
					async: true,
					dataType: "json",
					success: function(result) {
						if(!result.id){
							var notify = {
								'type': 'warning',
								'icon': 'remove',
								'title': "Bład",
								'massage': "Niepoprawny login lub hasło"
							};
							$( "#login_alert" ).html(Alert(notify));
						}else{
							$(".buyer-body").html("Zalogowany: " + result.login)
							$( "input[name='buyer_id']" ).val(result.id);
							$('#LoginModal').modal('hide');
						
						}
					}
			})
			.fail(function(error) {
					var notify = {
						'type': 'danger',
						'icon': 'remove',
						'title': "Bład",
						'massage': error.responseText
					};
					$( "#login_alert" ).html(Alert(notify));
			});
		}
		
		this.setOder = function(form){
		
			$.ajax({
					type: "POST",
					url: config.APP_PATH + "/controllers/OrderDynamicController.php",
					data:  $(form).serialize(),
					async: true,
					dataType: "json",
					success: function(result) {
						
						if(result.warning){
							var notify = {
								'type': 'warning',
								'icon': 'remove',
								'title': "Bład",
								'massage': result.warning
							};
							$( "#alert" ).html(Alert(notify));
						}else{
							
							var notify = {
								'type': 'success',
								'icon': 'ok',
								'title': "Zamowienie",
								'massage': "Dziękujemy za dokonanie zakupu. Oto potwierdzenie Twojego zamówienia. Numer zamówienia to: " + result.order_id
							};
							$( ".container" ).html(Alert(notify));
						
						}
					}
			})
			.fail(function(error) {
					var notify = {
						'type': 'danger',
						'icon': 'remove',
						'title': "Bład",
						'massage': error.responseText
					};
					$( "#alert" ).html(Alert(notify));
			});
		}
		
		this.newBuyer = function(){
			if($("#new_buyer").is(":checked")) {
				$(".new-buyer-form").show();
			}else{
				$(".new-buyer-form").hide();
			}
		}
		
		this.deliveryAddress = function(){
			if($("#other_delivery_address").is(":checked")) {
				$(".delivery-address-form").show();
			}else{
				$(".delivery-address-form").hide();
			}
		}
		
		this.deliveryMethod = function(){
			var method = $('input[name=deliveryMethod]:checked').data("method");
			var delivery_price =  parseFloat($('input[name=deliveryMethod]:checked').data("price"));
			var items_price =  parseFloat($('.items-price').data("items-price"));
			var summary_price = delivery_price + items_price;
			
			$('input[name=paymentMethod]').each(function() {
				if ($(this).data("method") == method){
					$(this).parents('div.radio').fadeIn();
					
					$(this).parents('div.radio').removeClass("disabled");
					$(this).prop("disabled", false);
					
					$(".summary-delivery-price").html(delivery_price.toFixed(2) + " zł");
					$(".summary-price").html(summary_price.toFixed(2) + " zł");
					$("#amount").val(summary_price.toFixed(2));
				}
				else if (method === undefined){
					$(this).parents('div.radio').addClass("disabled");
					$(this).prop("disabled", true);
				}
				else{
					$(this).parents('div.radio').fadeOut();
					
				}
			});
		}
		
		this.setup = function() {
			var self = this;
			
			self.validateNewBuyer();
			
			self.newBuyer();
			$('#new_buyer').change(function() {
				self.newBuyer();	
			});
			
			self.deliveryAddress();
			$('#other_delivery_address').change(function() {
				self.deliveryAddress();	
			});
			
			self.deliveryMethod();
			$('input[name=deliveryMethod]').change(function() {
				self.deliveryMethod();	
			});
			
			self.validateLogin();
			
		};
		
		this.setup();
	}
	
	new layout();
});


function Alert(notify){
	if (notify){
		return "<div class='alert alert-" + notify.type + "'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button><span class='glyphicon glyphicon-" + notify.icon + "'></span> <strong>" + notify.title + "</strong><hr class='message-inner-separator'><p>" + notify.massage + "</p></div><br />";
	}
}
  