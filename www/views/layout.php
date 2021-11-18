<!DOCTYPE html>
<html lang="pl">
<head>
	<title>Checkout dla sklepu internetowego</title>
	<meta charset="utf-8">
	<meta name="generator" content="DORIAN-SYSTEM" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="icon" type="image/ico" href="<?=$config->APP_PATH;?>/web/images/favicon.ico"></link>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600,600italic,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?=$config->APP_PATH;?>/web/css/bootstrap.min.css" media="all" />
	<link rel="stylesheet" href="<?=$config->APP_PATH;?>/web/css/style.css" media="all" />
		<link rel="stylesheet" href="<?=$config->APP_PATH;?>/web/css/bootstrap-select.min.css" media="all" />
	
	<script src="<?=$config->APP_PATH;?>/web/js/jquery.min.js"></script>
	<script src="<?=$config->APP_PATH;?>/web/js/bootstrap.min.js"></script>
	<script src="<?=$config->APP_PATH;?>/web/js/bootstrap-select.min.js"></script>
	<script src="<?=$config->APP_PATH;?>/web/js/i18n/defaults-pl_PL.js"></script>
	<script src="<?=$config->APP_PATH;?>/web/js/jquery.validate.min.js"></script>
	<script src="<?=$config->APP_PATH;?>/web/js/messages_pl.min.js"></script>
	<script src="<?=$config->APP_PATH;?>/web/js/layout.js"></script>
	<script>
		var config = {
			APP_PATH: "<?=$config->APP_PATH?>"
		};

	</script>
</head>
<body>
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>                        
		  </button>
		  <a class="navbar-brand" href="/"><img src="<?=$config->APP_PATH;?>/web/images/logo.png" /></a>
		</div>
	  </div>
	</nav>
	<div class="container">
		<div id="alert"></div>
		
		<form id="checkout">
			<input type="hidden" name="set_order" value="1">
			<div class="panel-group">
				<div class="row">
					<div class="col-md-4 col-xs-12">
						<div class="panel panel-default">
							<div class="panel-heading">1. TWOJE DANE</div>
							<input name="buyer_id" type="hidden" value="0" />
							<div class="panel-body buyer-body">
								<?php require_once "{$config->APP_PATH}/views/_buyer.php"; ?>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-xs-12">
						<div class="panel panel-default">
							<div class="panel-heading">2. METODA DOSTWY</div>
							<div class="panel-body">
								<?php require_once "{$config->APP_PATH}/views/_delivery.php"; ?>
							</div>
						</div>
						
						<div class="panel panel-default">
							<div class="panel-heading">3. METODA PŁATNOŚCI</div>
							<div class="panel-body">
								<?php require_once "{$config->APP_PATH}/views/_payment.php"; ?>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-xs-12">
						<div class="panel panel-default">
							<div class="panel-heading">4. PODSUMOWANIE</div>
							<div class="panel-body">
								<?php require_once "{$config->APP_PATH}/views/_summary.php"; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
		
	</div>
	<?php require_once "{$config->APP_PATH}/views/_login.php"; ?>
	<footer class="container-fluid text-center">
		<p>&copy; <?php echo date("Y"); ?> | Checkout dla sklepu internetowego</p>
	</footer>
	
</body>
</html>


