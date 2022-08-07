

<?php
$aracid=$_GET['id'];
include("bag.php");
$sor = mysqli_query($baglan,"SELECT * FROM cars where ID='$aracid' ");

$aracbilgi = mysqli_fetch_assoc($sor); 

$musaitmi = $aracbilgi['Musait'];
if($musaitmi==1){

}
?>

<!doctype html>
<html lang="en">
  <head>

   
    

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <script src="https://kit.fontawesome.com/dbfeb55d48.js" crossorigin="anonymous"></script>
  <link rel="icon" href="../img/car.png" type="image/x-icon" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $aracbilgi['Marka']." ".$aracbilgi['Model']." "." Detay" ?></title>
    <link href="../css/detail.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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




<main class="container">

<!-- Left Column / Headphones Image -->
<div class="left-column">

  <img data-image="red" class="active" src="../img/<?php echo $aracbilgi['Plaka'] ?>.jpg" alt="">
</div>


<!-- Right Column -->
<div class="right-column">

  <!-- Product Description -->
  <div class="product-description">
    <span><?php echo $aracbilgi['Plaka']; ?></span>
    <h1><?php echo $aracbilgi['Marka']." ".$aracbilgi['Model'] ?></h1>
    <p><i class="fa-solid fa-gauge-high"></i> <?php echo $aracbilgi['Km'] ?> Km</p>
    <p><i class="fa-solid fa-gear"></i> <?php echo $aracbilgi['Sanzıman'] ?></p>
    <p><i class="fa-solid fa-gas-pump"></i> <?php echo $aracbilgi['Yakıt'] ?></p>
    <p><i class="fa-solid fa-coins"></i> Günlük <?php echo $aracbilgi['GunlukF'] ?> TL</p>
    
  </div>

  <!-- Product Configuration -->
  <div class="product-configuration">

    
  

    <!-- Cable Configuration -->
    <div class="cable-config">
      <span>Zaman Aralığı Seçiniz</span>

        <table>
            <tr>
                <td>
                    İlk 
                </td>
                <td>
                    Son 
                </td>
            </tr>
            <tr>
                <td>
                <input type="date" id="ilk">
                </td>
                <td>
                <input type="date" id="son"> 
                </td>
            </tr>

        </table>



      

      <a href="index.php">Diğer Araçlar</a>
    </div>
  </div>

  <!-- Product Pricing -->
  <div class="product-price">
  <span>Ücret:</span>
    <span id="ucret">0</span>
    <span >TL</span>
    <a href="#" class="cart-btn" >Rezerve Et</a>
    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="<?php echo $aracbilgi['Marka']." ".$aracbilgi['Model'] ?>">Rezerve Et</button> -->
  </div>
</div>
</main>


<!-- <div class="content">
    
    <div class="container text-left">
      <div class="row justify-content-center">
        <div class="col-lg-7">
          
          <form action="#" class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="input_from">From</label>
                  <input type="text" class="form-control" id="input_from" placeholder="Start Date">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="input_to">To</label>
                  <input type="text" class="form-control" id="input_to" placeholder="End Date">
                </div>
            </div>
          </form>
        </div>
      </div>
          
    </div>

</div> -->

<!--Uyarı-->
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
<!---Dolu Uyarısı-->
<div class="modal" id="doluuyari" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Müsait Değil</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Seçmiş Olduğunuz Araç Şuan Başka Bir Kullanıcımızın Hizmetinde <a href="index.php">Buradan Diğer Araçlarımızı Görebilirsiniz</a>.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kapat</button>
        
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="bilgiformu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5><?php echo $aracbilgi['Marka']." ".$aracbilgi['Model']?></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Ad</label>
              <input type="text" class="form-control" name="isim" id="ad" required="required">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Soyad</label>
              <input class="form-control" type="text" id="soyad" required="required">

            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">TC</label>
              <input class="form-control" type="number" id="tc" required="required">

            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Mail</label>
              <input class="form-control" type="email" id="mail" required="required">

            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Telefon</label>
              <input class="form-control" type="tel" id="tel" required="required">

            </div>
            <div class="mb-3">
              <input  type="checkbox" id="chk" >
              <label for="KVKK" class="col-form-label"><a href="#">KVKK Aydınlatma metnini Okudum Ve Onaylıyorum<a></label>
              

            </div>
            <span id="modal_ucret"></span> TL
            <i class="fa-brands fa-cc-mastercard"></i>
          <i class="fa-brands fa-cc-visa"></i>
            
          </form>
        </div>
        <div class="modal-footer">
          
          
          <button type="button" class="btn btn-secondary" id="form_kapat" data-bs-dismiss="modal">Kapat</button>
          <button type="submit" class="btn btn-primary" id="rezerve_olustur">Oluştur</button>
        </div>
      </div>
    </div>
  </div>



    <script src="../js/detail.js" charset="utf-8"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  <script>
    $(".cart-btn").click(function(){


          if(<?php echo $musaitmi ?>==1){
            var son_ucret=$("#ucret").text();   
            if(son_ucret !=0)
            {
              $("#bilgiformu").modal('show');
              $("#modal_ucret").text(toplam_ucret);
            }
            else{
              $("#uyari").modal('show');
              
              
            }
          }
          else{
            $("#doluuyari").modal('show');
          }
        });

    var toplam_ucret;
    var ilk_tarih;
    var son_tarih;
    var arac_fiyat=<?php echo $aracbilgi['GunlukF']?>;
    var arac_plaka="<?php echo $aracbilgi['Plaka']?>";
    
    $("#ilk").on("change",function(){
        ilk_tarih = $(this).val();
        
        console.log(ilk_tarih);
        
        
    });
    $("#son").on("change",function(){
        son_tarih = $(this).val();
        ilk_tarih=new Date(ilk_tarih);
        son_tarih=new Date(son_tarih);
        
        console.log(son_tarih);
        console.log(ilk_tarih);
        var zamanFark = Math.abs(son_tarih.getTime() - ilk_tarih.getTime());
            
            //zamanFark değişkeni ile elde edilen saati güne çevirmek için aşağıdaki yöntem kullanılabilir.
        var gunFark = Math.ceil(zamanFark / (1000 * 3600 * 24)); 
            
        if(gunFark==0){
          toplam_ucret=arac_fiyat;
        }
        else{
        toplam_ucret=gunFark*arac_fiyat
        }
        $("#ucret").text(toplam_ucret);
    });
  </script>
  <script>
      $("#rezerve_olustur").click(function () {

if ($('#ad').val() == "" || $('#soyad').val() == ""|| $('#tc').val() == ""|| $('#mail').val() == ""|| $('#tel').val() == "" ||$("#chk").is(':checked')==false)
{
  $("#form_kapat").click();
  <?php $GLOBALS['uyari']="Lütfen Formu Eksiksiz Ve Doğru Doldurunuz !"?>
  $("#uyari").modal('show');
  
}
else {
  
  $.ajax({
 type: "POST",
 url: 'siparis_kaydet.php',
 data: {mail:$('#mail').val(),tel:$('#tel').val(),ad:$('#ad').val(),soyad:$('#soyad').val(),tc:$('#tc').val(),arac_plaka:arac_plaka,toplam:toplam_ucret
},
 success: function(data){
  location.href='index.php';
 },
 error: function(xhr, status, error){
 console.error(xhr);
 }
});
  }

})
  </script>
</body>
</html>



