<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css" type="text/css" media="all" />
</head>
<body>
	<section class="w3l-signup">
		<div class="overlay">
			<div class="wrapper">
				<div class="form-section">
					<h3 style="padding-bottom: 30px;">Sign in</h3>
					<?php if ($this->session->flashdata('msg')): ?>
						<div class="alert alert-danger">
							<?php echo $this->session->flashdata('msg'); ?>
						</div>
					<?php endif ?>
					<form class="form-signin" action="<?= base_url() ?>login/proses_login" method="post">
						<div class="form-input">
							<input type="text" name="username" id="username" placeholder="Username/NIM" required autofocus>
						</div>
						<div class="form-input">
							<input type="password" name="password" id="password" placeholder="Password" required>
						</div>
						<button type="submit" class="btn btn-primary theme-button mt-4">Login</button>
					</form>
				</div>
			</div>
		</div>
		<div id='stars'></div>
		<div id='stars2'></div>
		<div id='stars3'></div>

		<!-- copyright -->
		<div class="copy-right">
			<p>&copy; 2021 Synodev</a></p>
		</div>
	</section>

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
	<!-- get dem fancy typefaces -->
	<script type="text/javascript" src="//use.typekit.net/psm0wvc.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</body>
</html>