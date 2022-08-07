<!doctype html>
<html lang="en">
  <head>
  	<title>Yönetici Girişi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="../img/car.png" type="image/x-icon" />
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/login.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Giriş</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	
						<form action="giris_kontrol.php" method="POST" class="login-form">
		      		<div class="form-group">
		      			<input type="email" class="form-control rounded-left" name="user" placeholder="Kullanıcı Adı" required>
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" class="form-control rounded-left" name="pass" placeholder="Şifre" required>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
	            		
									  
									
								</div>
								<div class="w-50 text-md-right">
									<a href="#">Şifremi Unuttum</a>
								</div>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="btn btn-primary rounded submit p-3 px-5">Giriş Yap</button>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

