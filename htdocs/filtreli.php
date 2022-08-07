<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

<link rel="icon" href="../img/car.png" type="image/x-icon" />

<head>
<title>Filtrele</title>
<style>
  @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,300,600,700,900);


// colour stuff
@white: #ffffff;
@lightBG: #dce1df;
@salmon: #ff6666;

@teal: #0096a0;
@tealMid: #0ebac7;
@tealContrast: #33ffff;
@tealShade:	#007c85;

@darkGrey: #4f585e;
  body {
  background: @lightBG;
  color: @darkGrey;
  font-family: 'Source Sans Pro', sans-serif;
  text-rendering: optimizeLegibility;
}

a.btn {
  background: @teal;
  border-radius: 4px;
	box-shadow: 0 2px 0px 0 rgba(0,0,0,0.25);
  color: @white;
  display: inline-block;
  padding: 6px 30px 8px;
  position: relative;
  text-decoration: none;
	transition: all 0.1s 0s ease-out;
}

.no-touch a.btn:hover {
  background: lighten(@teal,2.5);
  box-shadow: 0px 8px 2px 0 rgba(0, 0, 0, 0.075);
  transform: translateY(-2px);
  transition: all 0.25s 0s ease-out;
}

.no-touch a.btn:active,
a.btn:active {
  background: darken(@teal,2.5);
  box-shadow: 0 1px 0px 0 rgba(255,255,255,0.25);
  transform: translate3d(0,1px,0);
  transition: all 0.025s 0s ease-out;
}

div.cards {
  margin: 10px auto;
  max-width: 960px;
  text-align: center;
}

div.card {
  background: @white;
  display: inline-block;
  margin: 8px;
  max-width: 300px;
  perspective: 1000;
  position: relative;
  text-align: left;
  transition: all 0.3s 0s ease-in;
  width: 300px;
  z-index: 1;

  img {
    max-width: 300px;
  }
  
  .card__image-holder {
    background: rgba(0,0,0,0.1);
    height: 0;
    padding-bottom: 75%;
  }

  div.card-title {
    background: @white;
    padding: 6px 15px 10px;
    position: relative;
    z-index: 0;
    
    a.toggle-info {
      border-radius: 32px;
      height: 32px;
      padding: 0;
      position: absolute;
      right: 15px;
      top: 10px;
      width: 32px;
      
      span {
        background: @white;
        display: block;
        height: 2px;
        position: absolute;
        top: 16px;
        transition: all 0.15s 0s ease-out;
        width: 12px;
      }
      
      span.left {
        right: 14px;
        transform: rotate(45deg);
      }
      span.right {
        left: 14px;
        transform: rotate(-45deg);
      }
    }
    
    h2 {
      font-size: 24px;
      font-weight: 700;
      letter-spacing: -0.05em;
      margin: 0;
      padding: 0;
      
      small {
        display: block;
        font-size: 18px;
        font-weight: 600;
        letter-spacing: -0.025em;
      }
    }
  }

  div.card-description {
    padding: 0 15px 10px;
    position: relative;
    font-size: 14px;
  }

  div.card-actions {
  	box-shadow: 0 2px 0px 0 rgba(0,0,0,0.075);
    padding: 10px 15px 20px;
    text-align: center;
  }
  
  div.card-flap {
    background: darken(@white,15);
    position: absolute;
    width: 100%;
    transform-origin: top;
    transform: rotateX(-90deg);
  }
  div.flap1 {
    transition: all 0.3s 0.3s ease-out;
    z-index: -1;
  }
  div.flap2 {
    transition: all 0.3s 0s ease-out;
    z-index: -2;
  }
  
}

div.cards.showing {
  div.card {
    cursor: pointer;
    opacity: 0.6;
    transform: scale(0.88);
  }
}

.no-touch  div.cards.showing {
  div.card:hover {
    opacity: 0.94;
    transform: scale(0.92);
  }
}

div.card.show {
  opacity: 1 !important;
  transform: scale(1) !important;

  div.card-title {
    a.toggle-info {
      background: @salmon !important;
      span {
        top: 15px;
      }
      span.left {
        right: 10px;
      }
      span.right {
        left: 10px;
      }
    }
  }
  div.card-flap {
    background: @white;
    transform: rotateX(0deg);
  }
  div.flap1 {
    transition: all 0.3s 0s ease-out;
  }
  div.flap2 {
    transition: all 0.3s 0.2s ease-out;
  }
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="index.php">RentAcar</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Anasayfa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Araçlar</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href='#'>Kurumsal Kiralama</a>
        </li>

        <li class="nav-item">
          <a class="nav-link " href='#'>Hakkımızda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href='#'>İletişim</a>
        </li>
        <li class="nav-item">
        
          <a class="nav-link " href='login.php'>Yönetici Girişi</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>

<!--- Uyarı -->
<div class="modal" id="uyari" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Uyarı</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Lütfen Seçim Yapınız !</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="uyari_kapat" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</body>
<?php 
$yakit=$_GET['yakit'];
$sanziman=$_GET['sanz'];
$marka=$_GET['marka'];
echo "<h3 align='center'>Sonuçlar</h3>";
include("bag.php");

        if(($yakit!="Yakıt Seçiniz..." )&& ($sanziman!="Şanzıman Seçiniz..." )&&($marka!="Marka Seçiniz..." ) ){
          $sec= "SELECT * FROM cars where Marka='$marka' and Yakıt='$yakit' and Sanzıman='$sanziman' ";
        }
        if(($yakit!="Yakıt Seçiniz..." )&& ($sanziman=="Şanzıman Seçiniz..." )&&($marka=="Marka Seçiniz..." ) ){
          $sec= "SELECT * FROM cars where  Yakıt='$yakit'  ";
        }
        if(($yakit=="Yakıt Seçiniz..." )&& ($sanziman!="Şanzıman Seçiniz..." )&&($marka=="Marka Seçiniz..." ) ){
          $sec= "SELECT * FROM cars where  Sanzıman='$sanziman'  ";
        }
        if(($yakit=="Yakıt Seçiniz..." )&& ($sanziman=="Şanzıman Seçiniz..." )&&($marka!="Marka Seçiniz..." ) ){
          $sec= "SELECT * FROM cars where  Marka='$marka'  ";
        }
        if(($yakit!="Yakıt Seçiniz..." )&& ($sanziman=="Şanzıman Seçiniz..." )&&($marka!="Marka Seçiniz..." ) ){
          $sec= "SELECT * FROM cars where  Marka='$marka' and Yakıt='$yakit'  ";
        }
        if(($yakit!="Yakıt Seçiniz..." )&& ($sanziman!="Şanzıman Seçiniz..." )&&($marka=="Marka Seçiniz..." ) ){
          $sec= "SELECT * FROM cars where  Yakıt='$yakit' and Sanzıman='$sanziman'  ";
        }
        if(($yakit=="Yakıt Seçiniz..." )&& ($sanziman!="Şanzıman Seçiniz..." )&&($marka!="Marka Seçiniz..." ) ){
          $sec= "SELECT * FROM cars where  Sanzıman='$sanziman' and Marka='$marka'   ";
        }
      
        $sonuc= $baglan->query($sec);

        if ($sonuc->num_rows > 0) 
      {
        echo "<div class='content'>
        <div class='cards'>";
        // verileri listeleyebiliriz
        while($cek = $sonuc->fetch_assoc()) 
         {
          $durum;
          $mesaj;
          if($cek['Musait']==1){
            $durum="success";
            $mesaj="Müsait";
          }
          else{
            $durum="danger";
            $mesaj="Dolu";
          }
          $urun=
          "
          <div class='card' id=".$cek['ID']." name='cars'>
  <div class='card__image-holder'>
    <img class='card__image' src='/img/".$cek['Plaka'].".jpg' alt='wave' style='width:100%;' />
  </div>
  <div class='card-title'>
    
      <span class='left'></span>
      <span class='right'></span>
    </a>
    <h2 >
        ".$cek['Marka']." ". $cek['Model']."
        
    </h2>
  </div>
  <div class='card-flap flap1'>
    <div class='card-description'>
    <span class='badge rounded-pill text-bg-primary'>".$cek['GunlukF']." TL</span>
    
    <span class='badge rounded-pill text-bg-warning'>".$cek['Sanzıman']."</span>

    <span class='badge rounded-pill text-bg-dark'>".$cek['Yakıt']."</span>
    
    <span class='badge rounded-pill text-bg-".$durum."'>".$mesaj."</span>
    </div>
    
  </div>
  
</div>

          ";
          echo $urun;
         }
    }
    else{
      echo "<script>
      alert('Malesef Aradığınız Kriterlerde Aracımız Yok Başka Bir Araç Seçiniz');
      location.href='index.php';
      </script>";
      
      
    }
?>
<script>
  $('.card').click(function(){
        var arac=$(this).attr('id');
        
        
        location.href=`aracdetay.php?id=${arac}`;
    });
</>