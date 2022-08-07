

<!doctype html>
<html lang="en">
  <head>
  	<title>Admin Paneli</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../img/car.png" type="image/x-icon" />
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/tablestyle.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Siparişler</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-responsive-xl">
						  <thead>
						    <tr>
						    	<th>Plaka</th>
						    	<th>Email</th>
						      <th>Username</th>
						      <th>Telefon</th>
						      <th>Fiyat</th>
						    </tr>
						  </thead>
						  <tbody>

                          <?php 
        include("bag.php");
        $sec= "SELECT ad,soyad,tel,mail,tc,plaka,toplam,tarih FROM siparis";
      
        $sonuc= $baglan->query($sec);

        if ($sonuc->num_rows > 0) 
      {
        // verileri listeleyebiliriz
        while($cek = $sonuc->fetch_assoc()) 
         {
         
          $urun="
          <tr class='alert' role='alert'>
          <td>
          ".$cek['plaka']."
          </td>
        <td class='d-flex align-items-center'>
            <div class='img' style='background-image: url(img/".$cek['plaka'].".jpg);'></div>
            <div class='pl-3 email'>
                <span>".$cek['mail']."</span>
                <span>Added: ".$cek['tarih']."</span>
            </div>
        </td>
        <td>".$cek['ad']." ".$cek['soyad']."</td>
        <td >".$cek['tel']."</td>
        <td>
            
          <span aria-hidden='true'>".$cek['toplam']." "." TL"."</span>
        </button>
      </td>
      </tr>";
          echo $urun;
         }
        }
        
        ?>













						    
						    
						  
						  </tbody>
						</table>
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

