<?php include("../yonetim/ayar.php");
// error_reporting(0);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MY GOLD Gayrimenkul</title>
  <meta name="google-site-verification" content="Q5F3fwZNK83xOyNS49QMVuYKWDPHPG0ncwnKk0KafCM" />
  <meta name="robots" content="index,follow" />
  <meta name="description" content="MY GOLD Emlak Aydın'ın altın yüzü " />
  <link rel="stylesheet" href="../style.css">
  <!--ANİMATE-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!--ANİMATE-->
  <!--favicon-->
  <link rel="shortcut icon" href="../img/favicon.ico">
  <!--favicon-->
  <!--BOOSTRAP-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <!--BOOSTRAP-->
  <!--MDB-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.css" rel="stylesheet" />
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.11.0/mdb.min.js"></script>
  <!--MDB-->

  <script type="text/javascript">
    (function() {
      var options = {
        whatsapp: "+90 541 213 4040",
        position: "right"
      };
      var proto = document.location.protocol,
        host = "getbutton.io",
        url = proto + "//static." + host;
      var s = document.createElement('script');
      s.type = 'text/javascript';
      s.async = true;
      s.src = url + '/widget-send-button/js/init.js';
      s.onload = function() {
        WhWidgetSendButton.init(host, proto, options);
      };
      var x = document.getElementsByTagName('script')[0];
      x.parentNode.insertBefore(s, x);
    })();
  </script>


</head>

<body >

<!--NAVBAR-->
  <!-- Navbar -->
<nav class=" navbar navbar-expand-lg sticky-top navbar-dark " style=" background-color:rgba(0, 0, 0, 0.9); ">
 
  <!-- Container wrapper -->
  <div class=" container-fluid">

  <!-- Toggle button -->
  <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars"></i>
  </button>

  <!-- Collapsible wrapper -->
  <div class="collapse navbar-collapse  " id="navbarSupportedContent">
    <!-- Navbar brand -->
    <a class="navbar-brand mt-2 mt-lg-0" href="https://mygoldgayrimenkul.com">
      <P class="mygold"> MY GOLD GAYRİMENKUL |</P>
    </a>

    <!-- Left links -->
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link disabled" href="#hakkimizda">Hakkımızda</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#iletisim">İletişim</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#hizmetlerimiz">Hizmetlerimiz</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle active" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="">İlanlar</a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="../kiralik/">Kiralık </a></li>
          <li><a class="dropdown-item" href="../satilik/">Satılık</a></li>
        </ul>
      </li>
    </ul>
  </div>

  <!-- Left links -->

  <!-- Collapsible wrapper -->

  <!-- Right elements -->
  <div class="d-flex align-items-center">
    <a class="online" style="border: 0px; border-radius: 60px; padding: 10px 40px; background-color: #f0a500; color: black;" href="tel: + 90 541 213 4040"> + 90 541 213 4040</a>
  </div>
  <!-- Right elements -->
  </div>
  <!-- Container wrapper -->

  </nav>
  <!-- Navbar -->

  <!--MAİN-->
  <div class=" container p-4">
    <div class="row">
      <?php
      $formSorgu = $baglan->prepare("SELECT * FROM kiralik ORDER BY ID ASC");
      $formSorgu->execute();

      while ($kullanici = $formSorgu->fetch(PDO::FETCH_ASSOC)) {
        //print_r($kullanici);
      ?>
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
<div class="card text-black mb-3" style="max-width: 18rem; margin-left: 40px; background-color: #f0a500;">
  <div class="card-header">Kiralık</div>
  <div class="card-body">
    <h5 class="card-title"><?php echo $kullanici["adresbasligi"] ?></h5>
    <p class="card-text"><?php echo $kullanici["adres"] ?></p>
    <table>
      <tr>
        <td class="bas">Fiyat :</td>
        <td><?php echo $kullanici["fiyat"] ?></td>
      </tr>
    </table>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-black" data-bs-toggle="modal" data-bs-target="#exampleModal-<?php echo $kullanici["id"] ?>">
      Detaylar için
    </button>

    <div class="modal fade  " id="exampleModal-<?php echo $kullanici["id"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Detaylar...</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <h3 class="text">Temel Bilgiler</h3>
            <table>
              <tr>
                <td class="bas">Oda Sayısı :</td>
                <td><?php echo $kullanici["odasayisi"] ?></td>
              </tr>
              <tr>
                <td class="bas">m<sup>2</sup> :</td>
                <td> <?php echo $kullanici["metrekare"] ?></td>
              </tr>
              <tr>
                <td class="bas">Eşya Durumu :</td>
                <td> <?php echo $kullanici["esyadurumu"] ?></td>
              </tr>
              <tr>
                <td class="bas">Banyo Sayısı :</td>
                <td><?php echo $kullanici["banyosayisi"] ?></td>
              </tr>
              <tr>
                <td class="bas">Bina Yaşı :</td>
                <td> <?php echo $kullanici["binayasi"] ?></td>
              </tr>
              <tr>
                <td class="bas">Isıtma :</td>
                <td><?php echo $kullanici["isitma"] ?></td>
              </tr>
              <tr>
                <td class="bas">Asansör Durumu :</td>
                <td><?php echo $kullanici["asansordurumu"] ?></td>
              </tr>
              <tr>
                <td class="bas">Kat Sayısı :</td>
                <td><?php echo $kullanici["kat"] ?></td>
              </tr>
              <tr>
                <td class="bas">Bulunduğu Kat :</td>
                <td><?php echo $kullanici["bulundugukat"] ?></td>
              </tr>
              <tr>
                <td class="bas">Aidat :</td>
                <td><?php echo $kullanici["aidat"] ?></td>
              </tr>
              <tr>
                <td class="bas">Balkon :</td>
                <td><?php echo $kullanici["balkon"] ?></td>
              </tr>
              <tr>
                <td class="bas">Resimleri Görmek İçin :</td>
                <td><a href="<?php echo $kullanici["resimler"] ?>" target="_blank">Tıklayınız</a></td>
              </tr>
              
            </table>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Kapat</button>
            <a href="tel: + 90 541 213 4040"><button type="button" class="btn btn-black">Bize Ulaşın</button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
      <?php } ?>

    </div>

  </div>

  <!--MAİN-->


  <!--NAVBAR-->
  <!-- FOOTER -->
  <footer class="text-center" style="background-color: black;">
    <div class="container p-4">
      <div class="row">
        <div class="form col-lg-6 col-md-12 mb-4 mb-md-0" style="padding: 30px;">

          <form action="https://formspree.io/f/mwkyzvav" method="post">
            <div class="mb-3">
              <label for="exampleFormControlInput1" style="color: #f0a500;" class="form-label">Adınız:</label>
              <input type="text" name="İsim" class="form-control" id="exampleFormControlInput1" required>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" style="color: #f0a500;" class="form-label">Soyadınız:</label>
              <input type="text" name="Soyisim" class="form-control" id="exampleFormControlInput1" required>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" style="color: #f0a500;" class="form-label">E-Mailiniz:</label>
              <input type="email" name="Mail" class="form-control" id="exampleFormControlInput1" required placeholder="örnek@mail.com">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" style="color: #f0a500;" class="form-label">Soru ve Görüşleriniz:</label>
              <textarea class="form-control" name="mesajınız" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <input type="hidden" name="_next" value="https://site.io/thanks.html">
            <input class="btn text-black  " style="background-color: #f0a500;" type="submit" value="GÖNDER">
            <input class="btn text-black " style="background-color: #f0a500;" type="reset" value="İPTAL">



          </form>


        </div>

        <div class="col-lg-6 col-md-12 mb-4 mb-md-0" style="padding: 30px;">
          <p style="color: #f0a500;">Adres Bilgileri İçin :</p>
          <img src="../img/qrcode.jpeg" width="120px" height="120px" alt="">
          <br><br><br><br><br><br>
          <p style="color: #f0a500; font-style: italic; "> "Kalitede Güven ..."</p>
          <br><br>
          <hr style="color: #f0a500;">
          <p style="color: #f0a500; padding-left: 35px; ">Web Tasarım :</p>
          <ul>
            <li class="backlink"><a target="_blank" href="https://ilkerkyilmaz.xyz/">ilkerkyilmaz.xyz</a></li>
            <li class="backlink"><a target="_blank" href="https://reyhankoyunlu.xyz/">reyhankoyunlu.xyz</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="text-center text-white : p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      <hr style="color: #f0a500;">
      © 2022 Tüm Hakları Saklıdır:
      <a class="" style="color: #f0a500;" href="https://www.mygoldgayrimenkul.com/">mygoldgayrimenkul.com</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- FOOTER -->


  <img class="up" src="../img/scrollup.png" alt="">


  <script src="../custom.js"></script>

</body>

</html>